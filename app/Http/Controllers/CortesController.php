<?php

namespace App\Http\Controllers;

class CortesController 
{

    function cortes(){
        
        return view('corte');
    }

    function cortesLavado(){
        
        return view('CorteLavado');
    }

    function cortesLavadoCepillado(){
       
        return view('CorteLavadoCepillado');
    }

    function cortesLavadoCepilladoPlanchado(){
        
        return view('CorteLavadoCepilladoPlanchado');
    }

}