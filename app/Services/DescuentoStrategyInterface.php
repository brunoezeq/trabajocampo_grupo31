<?php

namespace App\Services;

interface DescuentoStrategyInterface
{
    public function aplicarDescuento(float $precio): float;
}