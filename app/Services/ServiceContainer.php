<?php

namespace App\Services;

class ServiceContainer
{
    protected static $instancia;
    protected $singletons = [];
    protected $instancias = [];

    private function __construct()
    {
        $this->registrarDefaults();
    }

    public static function getInstancia(): self
    {
        if (!self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function bindSingleton(string $abstract, $concrete)
    {
        $this->singletons[$abstract] = $concrete;
    }

    public function get(string $abstract)
    {
        // Devuelve instancia ya creada
        if (isset($this->instancias[$abstract])) {
            return $this->instancias[$abstract];
        }

        // Si no está registrado como singleton, intenta construirlo directamente
        if (!isset($this->singletons[$abstract])) {
            $object = $this->build($abstract);
            return $object;
        }

        $concrete = $this->singletons[$abstract];

        if ($concrete instanceof \Closure) {
            $object = $concrete($this);
        } elseif (is_string($concrete) && class_exists($concrete)) {
            $object = $this->build($concrete);
        } else {
            $object = $concrete;
        }

        // Guarda la instancia en el contenedor de instancias
        $this->instancias[$abstract] = $object;
        return $object;
    }

    protected function build(string $class)
    {
        if (!class_exists($class)) {
            throw new \Exception("Clase {$class} no encontrada.");
        }

        $ref = new \ReflectionClass($class);

        if (!$ref->isInstanciable()) {
            throw new \Exception("Clase {$class} no instanciable.");
        }

        $ctor = $ref->getConstructor();
        if (!$ctor) {
            return $ref->newInstance();
        }

        $params = [];
        foreach ($ctor->getParameters() as $param) {
            $type = $param->getType();
            if ($type && !$type->isBuiltin()) {
                $paramClass = $type->getName();
                $params[] = $this->get($paramClass);
            } elseif ($param->isDefaultValueAvailable()) {
                $params[] = $param->getDefaultValue();
            } else {
                throw new \Exception("No se puede resolver el parámetro {$param->getName()} para {$class}");
            }
        }

        return $ref->newInstanceArgs($params);
    }

    protected function registrarDefaults()
    {
        // Adaptador del carrito
        $this->bindSingleton(\App\Interfaces\CarritoInterface::class, function ($c) {
            return new \App\Adapters\CodeIgniterCartAdapter();
        });

        // CarritoService (requiere adaptador)
        $this->bindSingleton(\App\Services\CarritoService::class, function ($c) {
            return new \App\Services\CarritoService($c->get(\App\Interfaces\CarritoInterface::class));
        });

        // ProductoService
        $this->bindSingleton(\App\Services\ProductoService::class, function ($c) {
            return new \App\Services\ProductoService();
        });

        // VentaService
        $this->bindSingleton(\App\Services\VentaService::class, function ($c) {
            return new \App\Services\VentaService();
        });

        // CategoriaService
        $this->bindSingleton(\App\Services\CategoriaService::class, function ($c) {
            return new \App\Services\CategoriaService();
        });

        // MedioPagoService
        $this->bindSingleton(\App\Services\MedioPagoService::class, function ($c) {
            return new \App\Services\MedioPagoService();
        });
    }
}