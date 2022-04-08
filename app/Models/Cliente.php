<?php
namespace App\Models;

class BaseCliente
{
    function getClientes()
    {
        //$conection= 
        return 'prometo dar clientes';
    }
}

class Cliente extends baseCliente //como una fución de la clase cliente y base
{
    public $id;
    public $nombre;
    public $celular;
    public $correo;
}