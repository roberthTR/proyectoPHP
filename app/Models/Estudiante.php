<?php

namespace App\Models;

class Estudiante
{
    private $codigo;

    private $nombres;

    public function __construct($codigo, $nombres)
    {
        //echo 'Soy el constuctor de la clase Estudiante';
        $this->codigo = $codigo;
        $this->nombres = $nombres;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombres()
    {
        return $this->nombres; 
    }
}