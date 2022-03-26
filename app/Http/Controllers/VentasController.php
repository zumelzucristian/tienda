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
        echo '<p>Editar Precio Producto</p>';
        return new \App\Http\Response('EditarPrecioProducto');
    }

    function delete ()
    {
        echo '<p>Eliminar Precio Producto</p>';
        return new \App\Http\Response('EliminarPrecioProducto');
    }

    function ofertas ()
    {
        echo '<p>Ofertas precio producto</p>';
        return new \App\Http\Response('OfertasPrecioProducto');
    }

}