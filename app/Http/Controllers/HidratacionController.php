<?php

namespace App\Http\Controllers;

class HidratacionController 
{

    function hidratacion(){
        echo '<p>Hidratación </p>';
        return new \App\Http\Response('hidratación');
    }