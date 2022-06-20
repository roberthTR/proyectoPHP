<?php

namespace App\Models;

class  Curso
{
    private $nomCurso;

    private $codCurso;

    public function __construct()
    {
        $this->nomCurso = $nomCurso;
        $this->codCurso =$codCurso;
    }

    public function getNomCurso()
    {
        return $this->nomCurso;
    }

    public function getCodCurso()
    {
        return $this->codCurso;
    }
}