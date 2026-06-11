<?php

namespace App\Services\Strategy;

class StrategyMercadoPago implements StrategyInterface
{
    // 1.5% de descuento
    public function getPrecioFinal(float $precio): float
    {
        return round($precio * 0.985, 2);
    }
}
