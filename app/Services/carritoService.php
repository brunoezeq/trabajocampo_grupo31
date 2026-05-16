<?php

namespace App\Services;

class CarritoService
{
    // Valida si el producto se puede agregar al carrito
    public function validarProducto($producto)
    {
        if (!$producto) {
            return 'El producto no existe.';
        }

        if ($producto['estado_producto'] != 1) {
            return 'El producto está inactivo.';
        }

        return null;
    }

    // Verifica stock
    public function verificarStock($producto, $cart)
    {
        $cantidadEnCarrito = 0;

        foreach ($cart->contents() as $item) {

            if ($item['id'] == $producto['id_producto']) {
                $cantidadEnCarrito += $item['qty'];
            }
        }

        if ($producto['stock_producto'] <= $cantidadEnCarrito) {
            return 'No hay suficiente stock disponible.';
        }

        return null;
    }

    // Arma prodcto para el carrito
    public function armarItemCarrito($producto)
    {
        return [
            'id'    => $producto['id_producto'],
            'name'  => $producto['nombre_producto'],
            'price' => $producto['precio_producto'],
            'qty'   => 1
        ];
    }

    // Agrega el producto al carrito
    public function agregarProducto($producto, $cart)
    {
        $item = $this->armarItemCarrito($producto);

        $cart->insert($item);
    }
}