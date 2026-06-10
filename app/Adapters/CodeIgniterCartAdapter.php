<?php

namespace App\Adapters;

use App\Interfaces\CarritoInterface;

class CodeIgniterCartAdapter implements CarritoInterface
{
    protected $cart;

    public function __construct()
    {
        // Inicializa el carrito del framework CodeIgniter
        $this->cart = \Config\Services::cart();
    }

    public function agregar($id, $nombre, $precio, $cantidad)
    {
        $this->cart->insert([
            'id'    => $id,
            'name'  => $nombre,
            'price' => $precio,
            'qty'   => $cantidad
        ]);
    }

    public function eliminar($id)
    {
        // Recorre el contenido y elimina el item que coincida por id
        foreach ($this->obtenerContenido() as $item) {
            if ($item['id'] == $id) {
                // remove espera rowid
                $this->cart->remove($item['rowid']);
                return true;
            }
        }
        return false;
    }

    public function vaciar()
    {
        $this->cart->destroy();
    }

    public function obtenerContenido(): array
    {
        $contents = $this->cart->contents();
        // Aseguramos que si contents() devuelve null/false, se transforme en un array vacío
        return is_array($contents) ? $contents : [];
    }
}