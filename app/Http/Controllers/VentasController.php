<?php

namespace App\Http\Controllers;

class VentasController
{
    function index()
    {
        echo '<p>Listar precio producto</p>';
        return new \App\Http\Response('PrecioProducto');
    }

    function new()
    {
        echo '<p>Nuevo precio producto</p>';
        return new \App\Http\Response('NuevoPrecioProducto');
    }

    function edit()
    {
       
        return new \App\Http\Response('EditarPrecioProducto');
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