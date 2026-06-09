<?php

namespace App\Services;

class DescuentoMercadoPago implements DescuentoStrategyInterface
{
    // 1.5% de descuento
    public function aplicarDescuento(float $precio): float
    {
        return round($precio * 0.985, 2);
    }
}