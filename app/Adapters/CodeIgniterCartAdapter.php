<?php

namespace App\Adapters;

use App\Interfaces\CarritoInterface;

class CodeIgniterCartAdapter implements CarritoInterface
{
    protected $carrito;

    public function __construct()
    {
        // Inicializa el carrito del framework CodeIgniter
        $this->carrito = \Config\Services::cart();
    }

    public function agregar($idUsuario, $id, $nombre, $precio, $cantidad)
    {
        $idSesion = session('id_usuario') ?? session_id();
        if ($idSesion && $idSesion != $idUsuario) {
            throw new \Exception("Acceso denegado: El carrito no pertenece al usuario actual.");
        }

        $this->carrito->insert([
            'id'    => $id,
            'name'  => $nombre,
            'price' => $precio,
            'qty'   => $cantidad
        ]);
    }

    public function eliminar($idUsuario, $id)
    {
        $idSesion = session('id_usuario') ?? session_id();
        if ($idSesion && $idSesion != $idUsuario) {
            throw new \Exception("Acceso denegado: El carrito no pertenece al usuario actual.");
        }

        // Recorre el contenido y elimina el item que coincida por id
        foreach ($this->obtenerContenido($idUsuario) as $item) {
            if ($item['id'] == $id) {
                // remove espera rowid
                $this->carrito->remove($item['rowid']);
                return true;
            }
        }
        return false;
    }

    public function vaciar($idUsuario)
    {
        $idSesion = session('id_usuario') ?? session_id();
        if ($idSesion && $idSesion != $idUsuario) {
            throw new \Exception("Acceso denegado: El carrito no pertenece al usuario actual.");
        }

        $this->carrito->destroy();
    }

    public function obtenerContenido($idUsuario): array
    {
        $idSesion = session('id_usuario') ?? session_id();
        if ($idSesion && $idSesion != $idUsuario) {
            throw new \Exception("Acceso denegado: El carrito no pertenece al usuario actual.");
        }

        $contents = $this->carrito->contents();
        // Aseguramos que si contents() devuelve null/false, se transforme en un array vacio
        return is_array($contents) ? $contents : [];
    }
}