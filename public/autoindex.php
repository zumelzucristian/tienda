<?php

//requerir auto caraga de composer
require __DIR__ . '/../vendor/autoload.php';  //Es obligatorio siempre escribir

//instanciar

$miAuto = new App\Http\Auto; //Se creo un objeto
$tuAuto = new \App\Http\Auto; //Se creo otro objeto

//asignando valores a las propiedades

$miAuto->color="blanco";
$miAuto->modelo="camioneta";
$miAuto->año=1999;
$miAuto->funcional=false;

$tuAuto->color="rojo";
$tuAuto->modelo="automovil";
$tuAuto->año=2022;
$tuAuto->funcional=true;

// llamar funciones

$miAuto->mostrar();
$tuAuto->mostrar();