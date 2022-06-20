<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\{Estudiante, Curso};
use App\Controllers\Matricula;

#$cliente = new Cliente('York nice', '234566');

#print_r($cliente);

$matricula =new Matricula();

$matricula->agregarEsT(new Estudiante(458612, 'Jose Manuel'));
$matricula->agregarEsT(new Estudiante(852689, 'Frank '));
$matricula->agregarEsT(new Estudiante(374816, 'Luis'));

$matricula->agregarCur(new Curso('Matematica',49846543));

echo "------ Curso -------  "."\n";

foreach($matricula->listarCur() as $curso){
    echo "Nombres: ".$curso->getNomCurso()."\n";
    echo "Codigo: ".$curso->getCodCurso()."\n";
   
}
echo "------ Estudiantes -------  "."\n";

foreach($matricula->listarEst() as $estudiante){

    echo "Nombres: ".$estudiante->getNombres()."\n";
    echo "Codigo: ".$estudiante->getCodigo()."\n";
    
   
}
