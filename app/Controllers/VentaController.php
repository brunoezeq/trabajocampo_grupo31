<?php

namespace App\Controllers;

use App\Services\ServiceContainer;
use App\Services\ValidationException;

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
 
    public function registrarVenta($itemsCarrito)
    {
        // Obtener usuario desde sesión
        $clienteId = session('id_usuario');
        if (empty($clienteId)) {
            throw new \Exception('Usuario no autenticado.');
        }

        // Obtener medio de pago desde el request actual
        $medioPagoId = $this->request->getPost('medio_pago');
        if (empty($medioPagoId)) {
            throw new \Exception('Debe seleccionar un medio de pago.');
        }

        $db = \Config\Database::connect();
        $db->transStart();

        try {
            
            $this->ventaService->validarStock($itemsCarrito);

            $ventaId = $this->ventaService->crearVenta($clienteId, $medioPagoId);
            if (!$ventaId) {
                throw new \Exception('Error al crear la venta.');
            }

            $this->ventaService->crearDetallesVenta($ventaId, $itemsCarrito, $medioPagoId);

            $this->ventaService->actualizarStock($itemsCarrito);

            $db->transComplete();
            return true;
        } catch (ValidationException $ve) {
            $db->transRollback();
            throw $ve;
        } catch (\Exception $ex) {
            $db->transRollback();
            throw $ex;
        }
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