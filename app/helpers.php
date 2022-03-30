<?php

if(!function_exists('view'))
{
    //Es una función que recive un view y ese view se lo pasa a la instancia o al contructor de mi clase response y lo retorna
    function view($view)
    {
        return new \App\Http\Response($view);
    }
}

if(!function_exists('pathView'))
{
    //Es una función que recive un view y ese view se lo pasa a la instancia o al contructor de mi clase response y lo retorna
    function pathView($view)
    {
        return __DIR__ . '/../views/' . $view . '.php';
    }
}