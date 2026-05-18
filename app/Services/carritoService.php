<?php

namespace App\Services;


class CarritoService
{
     protected $cart;

         public function __construct()
    {
        $this->cart = \Config\Services::cart();
    }

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
    public function verificarStock($producto)
    {
        $cantidadEnCarrito = 0;

        foreach ($this->cart->contents() as $item) {
            if ($item['id'] == $producto['id_producto']) {
                $cantidadEnCarrito += $item['qty'];
            }
        }

        if ($producto['stock_producto'] <= $cantidadEnCarrito) {
            return 'No hay suficiente stock disponible.';
        }

        return null;
    }


  // Agrega el producto al carrito
    public function agregarProducto($producto)
    {
        $this->cart->insert([
            'id'    => $producto['id_producto'],
            'name'  => $producto['nombre_producto'],
            'price' => $producto['precio_producto'],
            'qty'   => 1
        ]);
    }

   // Eliminar producto del carrito por su ID de producto
    public function eliminarItem($id_producto)
    {
        // Busca el rowid correspondiente al id_producto
        foreach ($this->cart->contents() as $item) {
            if ($item['id'] == $id_producto) {
                $this->cart->remove($item['rowid']);
                
                return true; // Producto eliminado exitosamente
            }
        }
        return false; // Producto no encontrado en el carrito
    }

    // Vaciar carrito y todos sus items
    public function destruirCarrito()
    {
        $this->cart->destroy();
    }
}

//Obtener todos los items cargados en el carrito
    public function obtenerItems()
    {
        return $this->cart->contents();
    }