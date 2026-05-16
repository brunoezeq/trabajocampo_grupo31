<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Models\medio_pago_model;
use App\Services\carritoService;

class CarritoController extends BaseController
{

    // Mostrar carrito
    public function verCarrito()
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
        $cart = \Config\Services::cart();

        $idProducto = $this->request->getPost('id');

        $productoModel = new producto_model();

        $producto = $productoModel->find($idProducto);

        $service = new CarritoService();

        // Validar producto
        $errorProducto = $service->validarProducto($producto);

        if ($errorProducto) {
            return redirect()->back()->with('mensaje', $errorProducto);
        }

        // Verificar stock
        $errorStock = $service->verificarStock($producto, $cart);

        if ($errorStock) {
            return redirect()->back()->with('mensaje', $errorStock);
        }

        // Agregar producto al carrito
        $service->agregarProducto($producto, $cart);

        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Producto agregado correctamente.');
    }


    //Eliminar producto del carrito
    public function eliminarItem($rowid)
    {
        $cart = \Config\Services::cart();

        $cart->remove($rowid);

        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Producto eliminado del carrito.');
    }


    // Vaciar carrito
    public function vaciarCarrito()
    {
        $cart = \Config\Services::cart();

        $cart->destroy();

        return redirect()->to('verCarrito')
                         ->with('mensaje', 'Carrito vaciado correctamente.');
    }
}