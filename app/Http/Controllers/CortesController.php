<?php

namespace App\Http\Controllers;

class CortesController 
{

    function cortes(){
        echo '<p>Modelos de corte</p>';
        return new \App\Http\Response('corte');
    }

}