<?php

namespace App\Services\Strategy;

class StrategyEfectivo implements StrategyInterface
{
    // 5% de descuento
    public function getPrecioFinal(float $precio): float
    {
        return round($precio * 0.95, 2);
    }
}
