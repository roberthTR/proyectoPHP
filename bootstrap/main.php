<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\{Estudiante,Municipalidad,Cliente};
use App\Controllers\ClienteControlador;

#$cliente = new Cliente('York nice', '234566');

#print_r($cliente);

$controlador =new ClienteControlador();

$controlador->agregar(new Cliente('Maxi :3', 123));
$controlador->agregar(new Cliente('Maxi :3', 123));
$controlador->agregar(new Cliente('Maxi :3', 123));

foreach($controlador->listar() as $cliente){

    echo "Nombres: ".$cliente->getNombres()."\n";
    echo "DNI: ".$cliente->getDni()."\n";
}