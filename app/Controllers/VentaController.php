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
 
   
    public function registrarVenta($itemsCarrito, $clienteId, $medioPagoId)
    {
        if (empty($clienteId)) {
            throw new \Exception('Usuario no autenticado.');
        }

        if (empty($medioPagoId)) {
            throw new \Exception('Debe seleccionar un medio de pago.');
        }

        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // Validaciones y orquestación delegando pasos atómicos al servicio
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

        return view('front/header_admin', $data)
             . view('backend/verVentas', $data)
             . view('front/footer_admin', $data);
    }

    // Ver detalle de venta
    public function mostrarDetalle($idVenta)
    {
        $service = $this->ventaService;

        $detalleVenta = $service->obtenerDetalleVenta($idVenta);

        $data['venta'] = $detalleVenta['venta'];
        $data['detalle'] = $detalleVenta['detalle'];
        $data['titulo'] = 'Detalle de Venta';

        return view('front/header_admin', $data)
             . view('backend/verDetalle', $data)
             . view('front/footer_admin', $data);
    }
}