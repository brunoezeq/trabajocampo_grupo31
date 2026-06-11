<?php

namespace App\Services\Strategy;

interface DescuentoStrategyInterface
{
    public function aplicarDescuento(float $precio): float;
}