<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Models\venta_model;
use App\Models\detalle_venta_model;
use App\Services\ServiceContainer;

class VentaController extends BaseController
{
    protected $carritoService;
    protected $ventaService;

    public function __construct()
    {
        $container = ServiceContainer::getInstancia();
        $this->carritoService = $container->get(\App\Services\CarritoService::class);
        $this->ventaService  = $container->get(\App\Services\VentaService::class);
    }

    // Registra una venta
    public function comprarCarrito()
    {
        // Obtener los items del carrito
        $itemsCarrito = $this->carritoService->obtenerItems();

        // Validaciones
        if (empty($itemsCarrito)) {
            return redirect()->to('verCarrito')
                             ->with('mensaje', 'El carrito está vacío.');
        }

        $medioPago = $this->request->getPost('medio_pago');
        if (empty($medioPago)) {
            return redirect()->back()
                             ->with('mensaje', 'Debe seleccionar un medio de pago.');
        }

        $errorStock = $this->ventaService->validarStock($itemsCarrito, new producto_model());
        if ($errorStock) {
            return redirect()->back()
                             ->with('mensaje', $errorStock);
        }

        $idUsuario = session('id_usuario');
        $resultado = $this->ventaService->registrarVenta($itemsCarrito, $idUsuario, $medioPago);

        if (!$resultado) {
            return redirect()->to('mostrarCarrito')
                             ->with('mensaje', 'Error al registrar la compra, intentelo nuevamente.');
        }

        // Vaciar carrito
        $this->carritoService->destruirCarrito();

        return redirect()->to('catalogo')
                         ->with('mensaje', 'Compra realizada correctamente.');
    }

    // Ver ventas
    public function mostrarVentas()
    {
        $service = $this->ventaService;

        $desde = $this->request->getGet('desde');
        $hasta = $this->request->getGet('hasta');

        $data['venta'] = $service->obtenerVentas($desde, $hasta);
        $data['titulo'] = 'Ventas';

        return $this->render('backend/verVentas', $data, 'front_admin');
    }

    // Ver detalle de venta
    public function mostrarDetalle($idVenta)
    {
        $service = $this->ventaService;

        $detalleVenta = $service->obtenerDetalleVenta($idVenta);

        $data['venta'] = $detalleVenta['venta'];
        $data['detalle'] = $detalleVenta['detalle'];
        $data['titulo'] = 'Detalle de Venta';

        return $this->render('backend/verDetalle', $data, 'front_admin');
    }
}