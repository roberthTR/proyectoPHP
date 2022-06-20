<?php

namespace App\Models;

class Municipalidad
{
    private $nombre;

    private $direccion;

    private $local;

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
}