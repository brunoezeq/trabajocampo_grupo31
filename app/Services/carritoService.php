<?php

namespace App\Services;


class CarritoService
{
     protected $cartAdapter;

    // Inyectamos la interfaz del carrito de un framwework específico
    public function __construct(carritoInterface $cartAdapter)
    {
        $this->cartAdapter = $cartAdapter;
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

        // Usamos el adaptador
        foreach ($this->cartAdapter->obtenerContenido() as $item) {
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
        // Usamos el adaptador
        $this->cartAdapter->agregar(
            $producto['id_producto'],
            $producto['nombre_producto'],
            $producto['precio_producto'],
            1
        );
    }

   // Eliminar producto del carrito por su ID de producto
 public function eliminarPorId($id_producto)
    {
        return $this->cartAdapter->eliminar($id_producto);
    }

    // Vaciar carrito y todos sus items
public function destruirCarrito()
    {
        $this->cartAdapter->vaciar();
    }

//Obtener todos los items cargados en el carrito
 public function obtenerItems()
    {
        return $this->cartAdapter->obtenerContenido();
    }