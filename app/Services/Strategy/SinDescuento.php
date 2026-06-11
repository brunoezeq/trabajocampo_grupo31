<?php

namespace App\Services\Strategy;

class SinDescuento implements DescuentoStrategyInterface
{
    public function aplicarDescuento(float $precio): float
    {
        return $precio;
    }
}