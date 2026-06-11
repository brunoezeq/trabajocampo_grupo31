<?php

namespace App\Services\Strategy;

class StrategySinDescuento implements StrategyInterface
{
    public function getPrecioFinal(float $precio): float
    {
        return $precio;
    }
}
