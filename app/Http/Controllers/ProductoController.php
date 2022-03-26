<?php

namespace App\Http\Controllers;

class ProductoController
{
    function index()
    {
        echo '<p>Listar productos</p>';
        return new \App\Http\Response('producto');
    }

    function new()
    {
        echo '<p>Nuevo producto</p>';
        return new \App\Http\Response('NuevoProducto');
    }

    function edit()
    {
        echo '<p>Editar producto</p>';
        return new \App\Http\Response('EditarProducto');
    }

    function delete ()
    {
        echo '<p>eliminar Producto</p>';
        return new \App\Http\Response('EliminarProducto');
    }

}