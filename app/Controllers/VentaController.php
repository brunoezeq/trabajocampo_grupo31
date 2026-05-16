<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Models\venta_model;
use App\Models\detalle_venta_model;
use App\Services\VentaService;

class VentaController extends BaseController
{

    // Registra una venta
    public function registrarVenta()
    {
        $cart = \Config\Services::cart();

        $cartItems = $cart->contents();

        if (empty($cartItems)) {
            return redirect()->to('verCarrito')
                             ->with('mensaje', 'El carrito está vacío.');
        }

        $medioPago = $this->request->getPost('medio_pago');

        if (empty($medioPago)) {
            return redirect()->back()
                             ->with('mensaje', 'Debe seleccionar un medio de pago.');
        }

        $productoModel = new producto_model();
        $ventaModel = new venta_model();
        $detalleModel = new detalle_venta_model();

        $db = \Config\Database::connect();

        $service = new VentaService();

        // Validar stock
        $errorStock = $service->validarStock($cartItems, $productoModel);

        if ($errorStock) {
            return redirect()->to('verCarrito')
                             ->with('mensaje', $errorStock);
        }

        // Registrar venta
        $resultado = $service->registrarVenta(
            $cartItems,
            session('id_usuario'),
            $medioPago,
            $ventaModel,
            $detalleModel,
            $productoModel,
            $db
        );

        if (!$resultado) {
            return redirect()->to('verCarrito')
                             ->with('mensaje', 'Error al registrar la venta.');
        }

        // Vaciar carrito
        $cart->destroy();

        return redirect()->to('catalogo')
                         ->with('mensaje', 'Compra realizada correctamente.');
    }

    // Ver ventas
    public function verVentas()
    {
        $ventaModel = new venta_model();

        $service = new VentaService();

        $desde = $this->request->getGet('desde');
        $hasta = $this->request->getGet('hasta');

        $data['venta'] = $service->obtenerVentas(
            $ventaModel,
            $desde,
            $hasta
        );

        $data['titulo'] = 'Ventas';

        return $this->render('backend/verVentas', $data, 'front_admin');
    }

    //Ver detalles de las ventas
    public function verDetalle($idVenta)
    {
        $ventaModel = new venta_model();
        $detalleModel = new detalle_venta_model();

        $service = new VentaService();

        $detalleVenta = $service->obtenerDetalleVenta(
            $idVenta,
            $ventaModel,
            $detalleModel
        );

        $data['venta'] = $detalleVenta['venta'];
        $data['detalle'] = $detalleVenta['detalle'];

        $data['titulo'] = 'Detalle de Venta';

        return $this->render('backend/verDetalle', $data, 'front_admin');
    }
}