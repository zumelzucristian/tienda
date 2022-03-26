<?php

namespace App\Http\Controllers;

class ClienteController
{
    function index()
    {
        echo '<p>Listar clientes</p>';
        return new \App\Http\Response('cliente');
    }

    function new()
    {
        echo '<p>nuevo cliente</p>';
        return new \App\Http\Response('nuevoCliente');
    }

    function edit()
    {
        echo '<p>editar cliente</p>';
        return new \App\Http\Response('editarCliente');
    }

    function delete ()
    {
        echo '<p>eliminar cliente</p>';
        return new \App\Http\Response('eliminarCliente');
    }

}