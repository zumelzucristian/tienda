<?php

require __DIR__ . '/../vendor/autoload.php';

$request = new App\Http\Request;

//$request->controller="producto";
//$request->setController('producto');// Funcion para dar un valor

//echo srequest->controller;
//echo $request->getController();// funcion para obtener el valor

$request->send();
