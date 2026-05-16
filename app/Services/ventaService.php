<?php

namespace App\Services;

class VentaService
{
    /**
     * 🔹 Verificar stock
     */
    public function validarStock($cartItems, $productoModel)
    {
        foreach ($cartItems as $item) {

            $producto = $productoModel->find($item['id']);

            if (!$producto) {
                return 'Uno de los productos no existe.';
            }

            if ($producto['stock_producto'] < $item['qty']) {
                return 'Stock insuficiente para el producto: ' . $producto['nombre_producto'];
            }
        }

        return null;
    }

    /**
     * 🔹 Registrar venta completa
     */
    public function registrarVenta(
        $cartItems,
        $clienteId,
        $medioPagoId,
        $ventaModel,
        $detalleModel,
        $productoModel,
        $db
    ) {

        $db->transStart();

        // Crear venta
        $ventaData = $this->armarVenta($clienteId, $medioPagoId);

        $ventaId = $ventaModel->insert($ventaData, true);

        if (!$ventaId) {
            return false;
        }

        // Registrar detalle y actualizar stock
        foreach ($cartItems as $item) {

            $producto = $productoModel->find($item['id']);

            // detalle
            $detalleData = $this->armarDetalle($ventaId, $item);

            $detalleModel->insert($detalleData);

            // actualizar stock
            $nuevoStock = $producto['stock_producto'] - $item['qty'];

            $productoModel->update($item['id'], [
                'stock_producto' => $nuevoStock
            ]);
        }

        $db->transComplete();

        return $db->transStatus();
    }

    /**
     * 🔹 Armar venta
     */
    private function armarVenta($clienteId, $medioPagoId)
    {
        return [
            'cliente_id' => $clienteId,
            'fecha_venta' => date('Y-m-d'),
            'medio_pago_id' => $medioPagoId
        ];
    }

    /**
     * 🔹 Armar detalle
     */
    private function armarDetalle($ventaId, $item)
    {
        return [
            'venta_id' => $ventaId,
            'producto_id' => $item['id'],
            'detalle_cantidad' => $item['qty'],
            'detalle_precio' => $item['price']
        ];
    }

    // Obtener las ventas 
    public function obtenerVentas($ventaModel, $desde = null, $hasta = null)
    {
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
    public function obtenerDetalleVenta($idVenta, $ventaModel, $detalleModel)
    {
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