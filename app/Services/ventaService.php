<?php

namespace App\Services;
use App\Models\producto_model;
use App\Models\venta_model;
use App\Models\detalle_venta_model;

class VentaService
{
    //Registrar venta
        public function registrarVenta($itemsCarrito, $clienteId, $medioPagoId)
    {
        $db = \Config\Database::connect();
        $db->transStart();

        $ventaId = $this->crearVenta($clienteId, $medioPagoId);

        if (!$ventaId) {
            $db->transRollback();
            return false;
        }
        $resultadoDetalles= $this->crearDetallesVenta($ventaId, $itemsCarrito);
         if (!$ResultadoDetalles) {
            $db->transRollback();
            return false;
        }
        $resultadoActulizarStock=  $this->actualizarStock($itemsCarrito);
         if (!$resultadoActulizarStock) {
            $db->transRollback();
            return false;
        }
        $db->transComplete();
        return true;
    }


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
             return null; // Error al crear la venta
         }
         return $ventaId
    }

    private function crearDetallesVenta($ventaId, $itemsCarrito)
{
    $detalleModel = new \App\Models\detalle_venta_model();

    foreach ($itemsCarrito as $item) {
       $detalleId= $detalleModel->insert([
            'venta_id'         => $ventaId,
            'producto_id'      => $item['id'],
            'detalle_cantidad' => $item['qty'],
            'detalle_precio'   => $item['price']
        ]);
    }
}

    private function actualizarStock($itemsCarrito)
    {
    $productoModel = new \App\Models\producto_model();

    foreach ($itemsCarrito as $item) {
        $producto = $productoModel->obtenerPorId($item['id']);

        if ($producto) {
            $nuevoStock = $producto['stock_producto'] - $item['qty'];

            $productoModel->update($item['id'], [
                'stock_producto' => $nuevoStock
            ]);
        }
    }
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