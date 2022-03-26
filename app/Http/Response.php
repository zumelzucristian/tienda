<?php

namespace App\Http;

class Response
{
    //vamos a devolver vistas
    private $view;
    
    function __construct($view)  //que vista quiero reponder
    {
        $this->view = $view;
    }

    //funcion para ejecutar esa respuesta
    function send()
    {
        echo 'enviar como respuesta la vista ' . $this->view;
    }
}