<?php

namespace App\Controllers;

use App\Models\{Estudiante,Curso};

class   Matricula
{
    public function __construct()
    {
       $this->arregloEst = [];
       $this->arregloCur = [];
    }

    public function agregarEst(Estudiante $estudiante)
    {
        $this->arregloEst[] = $estudiante;
    }

    public function agregarCur(Curso $curso)
    {
        $this->arregloCur[] = $curso;
    }

    public function listarEst()
    {
        return $this->arregloEst;
       
    }

    public function listarCur()
    {
        return $this->arregloCur;
    }
}