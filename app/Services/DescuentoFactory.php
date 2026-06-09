<?php

namespace App\Services;

class DescuentoFactory
{
    /**
     * Mapea el id de medio de pago a una estrategia de descuento.
     * Asumimos: 1 = Efectivo, 2 = Tarjeta de crédito, 3 = MercadoPago.
     */
    public static function crearPorMedioPagoId($medioPagoId): DescuentoStrategyInterface
    {
        switch ((int) $medioPagoId) {
            case 1:
                return new DescuentoEfectivo();
            case 2:
                return new DescuentoTarjetaCredito();
            case 3:
                return new DescuentoMercadoPago();
            default:
                return new SinDescuento();
        }
    }
}