<?php

namespace App\Services;

class SinDescuento implements DescuentoStrategyInterface
{
    public function aplicarDescuento(float $precio): float
    {
        return $precio;
    }
}