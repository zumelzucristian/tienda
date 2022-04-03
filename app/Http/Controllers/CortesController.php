<?php

namespace App\Http\Controllers;

class CortesController 
{

    function index(){
        
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