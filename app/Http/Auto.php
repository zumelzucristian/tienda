<?php

namespace App\Http;

class Auto{
    public $color;
    public $modelo;
    public $año;
    public $funcional;

function arrancar(){
    echo '<p> El automovil esta arrancando</p>';
}

function mostrar(){
    echo '<p>El color del auto es: '. $this->color . '</p>';
    echo '<p>El modelo del auto es: '. $this->modelo . '</p>';
    echo '<p>El año del auto es: '. $this->año .'</p>';
    if($this->funcional){
        echo '<p>El auto funciona </p>';
    }
    else {
        echo '<p>El auto no es funciona </p>';
    }
}

}

