<?php

namespace App\Services;

class DescuentoTarjetaCredito implements DescuentoStrategyInterface
{
    // 3% de descuento
    public function aplicarDescuento(float $precio): float
    {
        return round($precio * 0.97, 2);
    }
}