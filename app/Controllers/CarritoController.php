<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Models\medio_pago_model;
use App\Services\carritoService;
use App\Services\ProductoService;

class CarritoController extends BaseController
{
    protected $carritoService;
    protected $productoService;

    public function __construct()
    {
        $this->carritoService = new CarritoService();
        $this->productoService = new ProductoService();
    }

    // Mostrar carrito
    public function mostrarCarrito()
    {
        $cart = \Config\Services::cart();

        $medioPagoModel = new medio_pago_model();

        $data['titulo'] = 'Mi Carrito';
        $data['medio_pago'] = $medioPagoModel->findAll();
        $data['carrito'] = $cart->contents();

        return $this->render('front/carrito', $data);
    }


    // Agregar producto al carrito
    public function agregarAlCarrito()
    {

        $idProducto = $this->request->getPost('id');

        $producto = $ProductoService->obtenerPorId($idProducto);

        // Validar producto
        $errorProducto = $carritoService->validarProducto($producto);

        if ($errorProducto) {
            return redirect()->back()->with('mensaje', $errorProducto);
        }

        // Verificar stock
        $errorStock = carritoService->verificarStock($producto, $cart);

        if ($errorStock) {
            return redirect()->back()->with('mensaje', $errorStock);
        }

        // Agregar producto al carrito
        $service->agregarProducto($producto);

        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Producto agregado correctamente.');
    }

    // Eliminar producto del carrito por su ID de producto
    public function eliminarItemCarrito($id_producto)
    {
       $productoEliminado= $this->carritoService->eliminarPorId($id_producto);

       if(!$productoEliminado){
           return redirect()->to('verCarrito')
                            ->with('mensaje', 'No se encontró el item en el carrito.');
       }
       return redirect()->to('verCarrito')
                        ->with('mensaje', 'Se eliminó el item del carrito.');

    }


    // Vaciar carrito
    public function vaciarCarrito()
    {
        $this->CarritoService->destruirCarrito();
        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Carrito vaciado correctamente.');
    }
}