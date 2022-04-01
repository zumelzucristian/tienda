<?php

namespace App\Http\Controllers;

class VentasController
{
    function index()
    {
        
        return view('PrecioProducto');
    }

    function new()
    {
        
        return view('NuevoPrecioProducto');
    }

    function edit()
    {
       
        return view('EditarPrecioProducto');
    }

    function delete ()
    {
        
        return view('EliminarPrecioProducto');
    }

    function ofertas ()
    {
        
        return view('OfertasPrecioProducto');
    }

}