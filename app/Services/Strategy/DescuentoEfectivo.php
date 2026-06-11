<?php

namespace App\Services\Strategy;

class DescuentoEfectivo implements DescuentoStrategyInterface
{
    // 5% de descuento
    public function aplicarDescuento(float $precio): float
    {
        return round($precio * 0.95, 2);
    }
}