<?php

namespace App\Http\Controllers;

class ClienteController
{
    function index()
    {
       
        $cliente = new \App\Models\Cliente;

        $result = $cliente->getClientes();

        $tableBody = '';

        foreach ($result as $value) {

            $tableBody.= '<tr>';//es igual a decir  $tableBody = $tableBody .= '<tr>';
            $tableBody.= '<td>';
            $tableBody.= $value->id;
            $tableBody.= '</td>';
            $tableBody.= '<td>';
            $tableBody.= $value->nombre;
            $tableBody.= '</td>';
            $tableBody.= '<td>';
            $tableBody.= $value->celular;
            $tableBody.= '</td>';
            $tableBody.= '<td>';
            $tableBody.= $value->correo;
            $tableBody.= '</td>';
            $tableBody.= '<td>';
            $tableBody.= '<a class="btn btn-secondary" href="#" role="button">Editar</a>';
            $tableBody.= '<a class="btn btn-danger" href="#" role="button">Eliminar</a>';
            $tableBody.= '</td>';
            $tableBody.= '</tr>';
        }

        //echo $result;
        //var_dump($result); // sirve para mostrar la informacion de cualquier variable

        //return new \App\Http\Response('cliente');
        return view('ListarCliente', [
            'title' =>'Lista de Clientes',
            'tableBody'=>$tableBody
        ]); //Esta funcion se debe declarar,se acorto por helpers

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