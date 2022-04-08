<?php

namespace App\Database;

/*class ConectionPDO
{
    function saludar()
    {
        echo "Hola";

    }

    public $nombre="pedro";

    static public $apellido='sanchez';
    static function comer()
    {
        echo "comiendo";
    }

    $objeto= new ConectionPDO(); //Aca se esta instanciando el objeto
    $objeto->nombre="maria";
    $objeto->saludar();
    $objeto->comer();//no se puede hacer 

    ConectionPDO::comer(); //si se puede hacer es la forma correcta de llamar a la funcion estática
    <ConectionPDO::$apellido = 'asd';*/

class ConectionPDO
{
    /*static function createConection()
    {
      try
        {  //manejo de excepciones
        
            $dsn = 'mysql:dbname=dbpeluqueria;host=localhost';
            $username = 'root';
            $password = '';

            $conection = new \PDO($dsn, $username, $password); //crear un objeto
            return $conection; //crear un objeto
        }
      catch(\PDOException $miExcepcion) // si sucede una excepción 
        {
            echo 'Error de conexión en la base de datos' . $miExcepcion->getMEssage();
            exit;
        }
    }*/

    static function createConection()
    {
      try
        {  //manejo de excepciones
        
            $dsn = 'pgsql:dbname=dd36jskme6q0v0;host=ec2-3-217-251-77.compute-1.amazonaws.com;port=5432';
            $username = 'gsmsvkyrxkiscg';
            $password = '9ae6022c7405ea2251b9964aff9bb21559a28f4803c05d6a4c30c61816233f55';

            $conection = new \PDO($dsn, $username, $password); //crear un objeto
            return $conection; //crear un objeto
        }
      catch(\PDOException $miExcepcion) // si sucede una excepción 
        {
            echo 'Error de conexión en la base de datos' . $miExcepcion->getMEssage();
            exit;
        }
    }
}

