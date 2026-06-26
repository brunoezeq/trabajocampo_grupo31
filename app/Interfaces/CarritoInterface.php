<?php

namespace App\Interfaces;

interface CarritoInterface
{
    public function agregar($idUsuario, $id, $nombre, $precio, $cantidad);
    public function eliminar($idUsuario, $id);
    public function vaciar($idUsuario);
    public function obtenerContenido($idUsuario): array;
}