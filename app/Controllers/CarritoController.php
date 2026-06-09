<?php

namespace App\Controllers;

use App\Models\producto_model;
use App\Services\ServiceContainer;
use App\Services\ValidationException;

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
        $data['titulo'] = 'Mi Carrito';
        $data['medio_pago'] = $this->medioPagoService->obtenerMetodosPago();
        $data['carrito'] = $this->carritoService->obtenerItems();

        return $this->render('front/carrito', $data);
    }

    // Comprar carrito (moved from VentaController). Valida y delega el registro a VentaController->registrarVenta
    public function comprarCarrito()
    {
        // Obtener los items del carrito
        $itemsCarrito = $this->carritoService->obtenerItems();

        // Validaciones
        if (empty($itemsCarrito)) {
            return redirect()->to('verCarrito')
                             ->with('mensaje', 'El carrito está vacío.');
        }

        $medioPago = $this->request->getPost('medio_pago');
        if (empty($medioPago)) {
            return redirect()->back()
                             ->with('mensaje', 'Debe seleccionar un medio de pago.');
        }

        // Validar stock usando el método que ahora está en CarritoService
        try {
            $this->carritoService->validarStock($itemsCarrito);
        } catch (ValidationException $ve) {
            return redirect()->back()
                             ->withInput()
                             ->with('errores', $ve->getErrors());
        } catch (\Exception $ex) {
            return redirect()->back()
                             ->withInput()
                             ->with('mensaje', $ex->getMessage());
        }

        // Delegar el registro a VentaController::registrarVenta
        try {
            $idUsuario = session('id_usuario');

            // Crear instancia del controlador de ventas y delegar
            $ventaController = new \App\Controllers\VentaController();
            $resultado = $ventaController->registrarVenta($itemsCarrito, $idUsuario, $medioPago);

            if ($resultado === false) {
                return redirect()->to('mostrarCarrito')
                                 ->with('mensaje', 'Error al registrar la compra, inténtelo nuevamente.');
            }
        } catch (ValidationException $ve) {
            return redirect()->to('mostrarCarrito')
                             ->withInput()
                             ->with('errores', $ve->getErrors());
        } catch (\Exception $ex) {
            return redirect()->to('mostrarCarrito')
                             ->with('mensaje', $ex->getMessage());
        }

        // Vaciar carrito
        $this->carritoService->destruirCarrito();

        return redirect()->to('catalogo')
                         ->with('mensaje', 'Compra realizada correctamente.');
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