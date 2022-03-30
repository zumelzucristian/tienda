<?php

namespace App\Http\Controllers;

class CortesController 
{

    function cortes(){
        
        return view('corte');
    }

    function cortesLavado(){
        
        return view('corteLavado');
    }

    function cortesLavadoCepillado(){
       
        return view('corteLavadoCepillado');
    }

    function cortesLavadoCepilladoPlanchado(){
        
        return view('corteLavadoCepilladoPlanchado');
    }

}