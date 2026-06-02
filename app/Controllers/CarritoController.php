<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Services\ServiceContainer;

class CarritoController extends BaseController
{
    protected $carritoService;
    protected $productoService;
    protected $medioPagoService;

    public function __construct()
    {
        $container = ServiceContainer::getInstancia();

        // Obtener instancias singletons desde el contenedor
        $this->carritoService = $container->get(\App\Services\CarritoService::class);
        $this->productoService = $container->get(\App\Services\ProductoService::class);
        $this->medioPagoService = $container->get(\App\Services\MedioPagoService::class);
    }

    // Mostrar carrito
    public function mostrarCarrito()
    {
        $cart = \Config\Services::cart();

        $data['titulo'] = 'Mi Carrito';
        $data['medio_pago'] = $this->medioPagoService->obtenerMetodosPago();
        $data['carrito'] = $cart->contents();

        return $this->render('front/carrito', $data);
    }

    // Agregar producto al carrito
    public function agregarAlCarrito()
    {
        $idProducto = $this->request->getPost('id');

        $producto = $this->productoService->obtenerPorId($idProducto);

        // Validar producto
        $errorProducto = $this->carritoService->validarProducto($producto);

        if ($errorProducto) {
            return redirect()->back()->with('mensaje', $errorProducto);
        }

        // Verificar stock
        $errorStock = $this->carritoService->verificarStock($producto);

        if ($errorStock) {
            return redirect()->back()->with('mensaje', $errorStock);
        }

        // Agregar producto al carrito
        $this->carritoService->agregarProducto($producto);

        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Producto agregado correctamente.');
    }

    // Eliminar producto del carrito por su ID de producto
    public function eliminarItemCarrito($id_producto)
    {
       $productoEliminado = $this->carritoService->eliminarPorId($id_producto);

       if (!$productoEliminado) {
           return redirect()->to('verCarrito')
                            ->with('mensaje', 'No se encontró el item en el carrito.');
       }
       return redirect()->to('verCarrito')
                        ->with('mensaje', 'Se eliminó el item del carrito.');
    }

    // Vaciar carrito
    public function vaciarCarrito()
    {
        $this->carritoService->destruirCarrito();
        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Carrito vaciado correctamente.');
    }
}