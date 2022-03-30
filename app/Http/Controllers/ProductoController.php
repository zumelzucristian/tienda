<?php

namespace App\Http\Controllers;

class ProductoController
{
    function index()
    {
        
        return view('producto');
    }

    function new()
    {
        
        return view('NuevoProducto');
    }

    function edit()
    {
        
        return view('EditarProducto');
    }

    function delete ()
    {
        
        return view('EliminarProducto');
    }

}