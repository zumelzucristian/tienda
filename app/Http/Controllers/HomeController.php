<?php

namespace App\Http\Controllers;

class HomeController
{
    function index()
    {
        echo '<p>implementar la lógica del controlador Home método index </p>'
        return new \App\Http\Response('Home');
    }

    /*function saludar()
    {
        echo '<p>implementar la lógica del controlador Home método saludar </p>'  
    }

    function comer()
    {
        echo '<p>implementar la lógica del controlador Home método comer </p>'  
    }*/

}