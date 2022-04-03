<?php

namespace App\Http;

class Request
{
    //private $segment; para no crear get y set ahora es solo una variable
    private $controller;
    private $method;

    //set = establecer 
    public function setController($value)
    {
        //$this->controller = $value;
        if (empty($value[1])) {
            $this->controller = "home";
        } else {
            $this->controller = $value[1];
        }
    }
    // obtener el controlador = getControler
    public function getController()
    {
        //return $this->controller;
        $aux = strtolower($this->controller);  //cliente
        $aux = ucfirst($aux);  //Cliente
       //$aux = $aux . 'Controller'; //ClienteController
        $aux = 'App\Http\Controllers\\' . $aux . 'Controller'; //ClienteController y ya puede llamar a HomeController.php
       return $aux;
    }

    public function setMethod($value)
    {
        if (empty($value[2])) {
            $this->method = "index";
        } else {
            $this->method = $value[2];
        }
    }

    public function getMethod()
    {
        $aux = strtolower($this->method);
        return $aux;
    }

    public function __construct()
    {   
         //separa el string de la URL cada que encuentra un /
        $segment = explode('/', $_SERVER['REQUEST_URI']);
        //var_dump($segment);

        //Dar valor del controlador
        $this->setController($segment);
        $this->setMethod($segment);
    }

    public function send()//mostrar lo que se esta avanzando
    {
        //$_SERVER; // Variable del sistema
        //var_dump($_SERVER); // ver lo que tiene $_SERVER
        //var_dump($_SERVER['REQUEST_URI']); //devuelve solo la url
        
        //echo '<p>en el controllador [' . $this->getController() . '] llamar al methodo [' . $this->getMethod() . ']</p>';
        $myController = $this->getController();
        $myMethod = $this->getMethod();

        //esto va retornar un objeto, resivir un rsponse
        $myResponse = call_user_func([new $myController, $myMethod]);
        
        //response va llamar al metodo send
        $myResponse->send();

        

    }
}
