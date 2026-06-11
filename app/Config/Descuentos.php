<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Descuentos extends BaseConfig
{
    /**
     * Mapea el ID del medio de pago a su respectiva clase de estrategia de descuento.
     * 1 = Efectivo (5% desc)
     * 2 = Tarjeta de crédito (3% desc)
     * 3 = MercadoPago (1.5% desc)
     */
    public array $strategies = [
        1 => \App\Services\Strategy\DescuentoEfectivo::class,
        2 => \App\Services\Strategy\DescuentoTarjetaCredito::class,
        3 => \App\Services\Strategy\DescuentoMercadoPago::class,
    ];

    /**
     * Estrategia por defecto cuando no hay descuento o el ID no coincide.
     */
    public string $defaultStrategy = \App\Services\Strategy\SinDescuento::class;
}
