<?php

namespace App\Services\Strategy;

class StrategyPagoFactory
{
    /**
     * Instancia la estrategia de descuento adecuada según el ID del medio de pago.
     * 1 = Efectivo
     * 2 = Tarjeta de crédito
     * 3 = MercadoPago
     */
    public static function crearPorMedioPagoId($medioPagoId): StrategyInterface
    {
        switch ((int) $medioPagoId) {
            case 1:
                return new StrategyEfectivo();
            case 2:
                return new StrategyTarjetaCredito();
            case 3:
                return new StrategyMercadoPago();
            default:
                return new StrategySinDescuento();
        }
    }
}
