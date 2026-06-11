<?php

namespace App\Services\Strategy;

class StrategyTarjetaCredito implements StrategyInterface
{
    // 3% de descuento
    public function getPrecioFinal(float $precio): float
    {
        return round($precio * 0.97, 2);
    }
}
