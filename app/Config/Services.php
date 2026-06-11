<?php

namespace Config;

use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /**
     * Servicio dinámico que actúa como fábrica para instanciar la estrategia
     * de descuento adecuada basada en el ID de medio de pago.
     */
    public static function descuento($medioPagoId = null, $getShared = false)
    {
        if ($getShared) {
            return static::getSharedInstance('descuento', $medioPagoId);
        }

        $config = config('Descuentos');
        $strategyClass = $config->strategies[$medioPagoId] ?? $config->defaultStrategy;

        return new $strategyClass();
    }

    /**
     * Adaptador del carrito de CodeIgniter
     */
    public static function cartAdapter($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('cartAdapter');
        }
        return new \App\Adapters\CodeIgniterCartAdapter();
    }

    /**
     * Servicio de Carrito de Compras (no compartido por defecto para evitar estados de instancia duplicados)
     */
    public static function carritoService($getShared = false)
    {
        if ($getShared) {
            return static::getSharedInstance('carritoService');
        }
        return new \App\Services\CarritoService(static::cartAdapter());
    }

    /**
     * Servicio de Productos
     */
    public static function productoService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('productoService');
        }
        return new \App\Services\ProductoService();
    }

    /**
     * Servicio de Ventas
     */
    public static function ventaService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('ventaService');
        }
        return new \App\Services\VentaService();
    }

    /**
     * Servicio de Categorías
     */
    public static function categoriaService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('categoriaService');
        }
        return new \App\Services\CategoriaService();
    }

    /**
     * Servicio de Medios de Pago
     */
    public static function medioPagoService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('medioPagoService');
        }
        return new \App\Services\MedioPagoService();
    }

    /**
     * Servicio de Domicilios
     */
    public static function domicilioService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('domicilioService');
        }
        return new \App\Services\DomicilioService();
    }

    /**
     * Servicio de Ubicaciones
     */
    public static function ubicacionService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('ubicacionService');
        }
        return new \App\Services\UbicacionService();
    }

    /**
     * Servicio de Usuarios
     */
    public static function usuarioService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('usuarioService');
        }
        return new \App\Services\UsuarioService();
    }
}
