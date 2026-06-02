<?php

namespace App\Interfaces;

interface CarritoInterface
{
    public function agregar($id, $nombre, $precio, $cantidad);
    public function eliminar($id);
    public function vaciar();
    public function obtenerContenido(): array;
}