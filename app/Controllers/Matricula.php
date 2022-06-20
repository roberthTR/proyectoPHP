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

    public function agregarEst(Estudiante $estudiante, Curso $curso)
    {
        $this->arregloEst[] = $estudiante;
        $this->arregloCur[] = $curso;
        
    }

    public function agregarCur(Curso $curso)
    {
        $this->arregloCur[] = $curso;
       
    }

    public function listarEst()
    {
        return $this->arregloEst;
        return $this->arregloCur;
    }

    public function listarCur()
    {
        return $this->arregloCur;
    }
}