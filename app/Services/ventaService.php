<?php

namespace App\Services;

use App\Models\venta_model;
use App\Models\detalle_venta_model;
use App\Services\ServiceContainer;
use App\Services\ProductoService;
use App\Services\ValidationException;

class VentaService
{
    //Registrar venta
    public function registrarVenta($itemsCarrito, $clienteId, $medioPagoId)
    {
        $db = \Config\Database::connect();
        $db->transStart();

        try {
            // Validar stock antes de crear la venta (lanza ValidationException en caso de errores de validación)
            $this->validarStock($itemsCarrito);

            $ventaId = $this->crearVenta($clienteId, $medioPagoId);

            if (!$ventaId) {
                throw new \Exception('Error al crear la venta.');
            }

            // Pasamos medioPagoId a crearDetallesVenta para aplicar la estrategia de descuento
            $this->crearDetallesVenta($ventaId, $itemsCarrito, $medioPagoId);

            $this->actualizarStock($itemsCarrito);

            $db->transComplete();
            return true;
        } catch (\Exception $ex) {
            $db->transRollback();
            // En caso de ValidationException u otra excepción, se realiza rollback y se propaga o devuelve false según uso actual.
            return false;
        }
    }


    /**
     *  Verificar stock
     *  Obtiene ProductoService desde ServiceContainer y lanza ValidationException con array de errores
     */
    public function validarStock($cartItems)
    {
        $productoService = ServiceContainer::getInstancia()->get(ProductoService::class);

        $errores = [];

        foreach ($cartItems as $item) {
            $producto = $productoService->obtenerPorId($item['id']);

            if (!$producto) {
                $errores['producto_' . $item['id']] = 'El producto no existe (id: ' . $item['id'] . ').';
                continue;
            }

            if ($producto['stock_producto'] < $item['qty']) {
                $errores['stock_' . $item['id']] = 'Stock insuficiente para el producto: ' . $producto['nombre_producto'];
            }
        }

        if (!empty($errores)) {
            throw new ValidationException($errores);
        }

        return true;
    }

    /**
     *  Registrar venta completa
     */
    public function crearVenta($clienteId, $medioPagoId) 
    {
        $ventaModel = new \App\Models\venta_model();

        // Crear venta
        $ventaData = [
            'cliente_id'    => $clienteId,
            'fecha_venta'   => date('Y-m-d'),
            'medio_pago_id' => $medioPagoId
        ];

        $ventaId = $ventaModel->insert($ventaData, true);

        if (!$ventaId) {
            return null;
        }

        return $ventaId;
    }

    /**
     * Crear los detalles de venta (antes privado). Lanza excepciones en caso de fallo.
     */
    public function crearDetallesVenta($ventaId, $itemsCarrito, $medioPagoId)
    {
        $detalleModel = new \App\Models\detalle_venta_model();

        // Obtener la estrategia de descuento según el medio de pago
        $strategy = DescuentoFactory::crearPorMedioPagoId($medioPagoId);

        foreach ($itemsCarrito as $item) {
            $precioUnitario = floatval($item['price']);

            // Aplicar descuento mediante la estrategia
            $precioConDescuento = $strategy->aplicarDescuento($precioUnitario);

            $detallePayload = [
                'venta_id'         => $ventaId,
                'producto_id'      => $item['id'],
                'detalle_cantidad' => $item['qty'],
                'detalle_precio'   => $precioConDescuento
            ];

            $detalleId = $detalleModel->insert($detallePayload);
            if (!$detalleId) {
                throw new \Exception('Error al crear el detalle de venta para el producto id: ' . $item['id']);
            }
        }

        return true;
    }

    public function actualizarStock($itemsCarrito)
    {
        $productoService = ServiceContainer::getInstancia()
        ->get(ProductoService::class);

        foreach ($itemsCarrito as $item) {

        $productoService->descontarStock(
            $item['id'],
            $item['qty']
        );
    }

        if (!empty($errores)) {
            throw new ValidationException($errores);
        }

        return true;
    }

    // Obtener todas las ventas 
    public function obtenerVentas($desde = null, $hasta = null)
    {
        $ventaModel = new \App\Models\venta_model();

        $ventaModel->select('venta.*, usuario.nombre_usuario, usuario.apellido_usuario')
                ->join('usuario', 'usuario.id_usuario = venta.cliente_id')
                ->orderBy('fecha_venta', 'DESC');

        if ($desde) {
            $ventaModel->where('fecha_venta >=', $desde);
        }

        if ($hasta) {
            $ventaModel->where('fecha_venta <=', $hasta);
        }

        return $ventaModel->findAll();
    }

    // Obtener detalle de venta
    public function obtenerDetalleVenta($idVenta)
    {
        $ventaModel = new \App\Models\venta_model();
        $detalleModel = new \App\Models\detalle_venta_model();

        $venta = $ventaModel
            ->select('venta.*, usuario.nombre_usuario, usuario.apellido_usuario')
            ->join('usuario', 'usuario.id_usuario = venta.cliente_id')
            ->where('id_venta', $idVenta)
            ->first();

        $detalle = $detalleModel
            ->select('detalle_venta.*, producto.nombre_producto')
            ->join('producto', 'producto.id_producto = detalle_venta.producto_id')
            ->where('venta_id', $idVenta)
            ->findAll();

        return [
            'venta' => $venta,
            'detalle' => $detalle
        ];
    }
}