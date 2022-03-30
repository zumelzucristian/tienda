<?php

namespace App\Http\Controllers;

class ClienteController
{
    function index()
    {
       
        //return new \App\Http\Response('cliente');
        return view('ListarCliente'); //Esta funcion se debe declarar,se acorto por helpers
    }

    function new()
    {
        
        return view('NuevoCliente');
    }

    function edit()
    {
       
        return view('EditarCliente');
    }


}