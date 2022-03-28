<?php

namespace App\Http\Controllers;

class CortesController 
{

    function cortes(){
        echo '<p>Modelos de corte</p>';
        return new \App\Http\Response('corte');
    }

    function cortesLavado(){
        echo '<p>Modelos de corte con lavado</p>';
        return new \App\Http\Response('corteLavado');
    }

    function cortesLavadoCepillado(){
        echo '<p>Modelos de corte con lavado y cepillado</p>';
        return new \App\Http\Response('corteLavadoCepillado');
    }

    function cortesLavadoCepilladoPlanchado(){
        echo '<p>Modelos de corte con lavado, cepillado y planchado</p>';
        return new \App\Http\Response('corteLavadoCepilladoPlanchado');
    }

}