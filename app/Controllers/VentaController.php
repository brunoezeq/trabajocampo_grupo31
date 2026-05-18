<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Models\venta_model;
use App\Models\detalle_venta_model;
use App\Services\VentaService;
use App\Services\carritoService;

class VentaController extends BaseController
{


// Registra una venta
    public function comprarCarrito()
    {

        $carritoService = new carritoService();

        // Obtener los items del carrito
        $itemsCarrito = $carritoService->obtenerItems

        // 2. Validaciones de la Solicitud HTTP
        if (empty($itemsCarrito)) {
            return redirect()->to('verCarrito')
                             ->with('mensaje', 'El carrito está vacío.');
        }

        $medioPago = $this->request->getPost('medio_pago');
        if (empty($medioPago)) {
            return redirect()->back()
                             ->with('mensaje', 'Debe seleccionar un medio de pago.');
        }
        $ventaService = new VentaService();

        $errorStock= $ventaService->validarStock($itemsCarrito, new producto_model());
        if ($errorStock) {
            return redirect()->back()
                             ->with('mensaje', $errorStock);
        }

        $idUsuario= session('id_usuario');
        $resultado= $ventaService->registrarVenta($itemsCarrito, $idUsuario, $medioPago);

        if (!$resultado) {
            return redirect()->to('mostrarCarrito')
                             ->with('mensaje', 'Error al registrar la compra, intentelo nuevamente.');
        }
        // Vaciar carrito
        $carritoService->destruirCarrito();

        return redirect()->to('catalogo')
                         ->with('mensaje', 'Compra realizada correctamente.');
    }

    // Ver ventas
    public function mostrarVentas()
    {
        $service = new VentaService();

        $desde = $this->request->getGet('desde');
        $hasta = $this->request->getGet('hasta');

        $data['venta'] = $service->obtenerVentas(
            $desde,
            $hasta
        );

        $data['titulo'] = 'Ventas';

        return $this->render('backend/verVentas', $data, 'front_admin');
    }

    //Ver detalles de las ventas
    public function mostrarDetalle($idVenta)
    {
        $service = new VentaService();

        $detalleVenta = $service->obtenerDetalleVenta(
            $idVenta
        );

        $data['venta'] = $detalleVenta['venta'];
        $data['detalle'] = $detalleVenta['detalle'];

        $data['titulo'] = 'Detalle de Venta';

        return $this->render('backend/verDetalle', $data, 'front_admin');
    }
}