<?php

namespace App\Services\Strategy;

interface StrategyInterface
{
    public function getPrecioFinal(float $precio): float;
}
