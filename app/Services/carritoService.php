<?php

namespace App\Services;

use App\Services\ValidationException;
use App\Services\ServiceContainer;
use App\Services\ProductoService;
use App\Interfaces\CarritoInterface;

class CarritoService
{
    protected $cartAdapter;

    // Inyectamos la interfaz del carrito de un framework específico
    public function __construct(CarritoInterface $cartAdapter)
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

    // Validar stock para un conjunto de items (usado antes de procesar la compra)
    public function validarStock($cartItems)
    {
        /** @var ProductoService $productoService */
        $productoService = ServiceContainer::getInstancia()->get(ProductoService::class);

        $errores = [];

        foreach ($cartItems as $item) {
            // Se asume que el item tiene la clave 'id' y 'qty' (compatibilidad con adaptador)
            $productoId = isset($item['id']) ? $item['id'] : (isset($item['id_producto']) ? $item['id_producto'] : null);

            if ($productoId === null) {
                $errores['producto_indefinido'] = 'Item de carrito con id no definido.';
                continue;
            }

            $producto = $productoService->obtenerPorId($productoId);

            if (!$producto) {
                $errores['producto_' . $productoId] = 'El producto no existe (id: ' . $productoId . ').';
                continue;
            }

            if (!isset($item['qty']) || $producto['stock_producto'] < $item['qty']) {
                $errores['stock_' . $productoId] = 'Stock insuficiente para el producto: ' . $producto['nombre_producto'];
            }
        }

        if (!empty($errores)) {
            throw new ValidationException($errores);
        }

        return true;
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

    // Obtener todos los items cargados en el carrito
    public function obtenerItems()
    {
        return $this->cartAdapter->obtenerContenido();
    }
}