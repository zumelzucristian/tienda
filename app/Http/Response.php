<?php

namespace App\Http;

class Response
{
    //vamos a devolver vistas
    private $view;
    private $data;
    
    function __construct($view , $data)  //que vista quiero reponder
    {
        $this->view = $view;
        $this->data = $data;
    }

    //funcion para ejecutar esa respuesta
    function send()
    {
        /*echo 'enviar como respuesta la vista ' . $this->view;

        $contenido1 = "<p>párrafo</p>";
        $contenido2 = "<h1>Título</h1>";
        $paginaMaestra = "<div style='background-color:red'>".$contenido2."</div>";
        echo $paginaMaestra;*/
        //acortamos ya que se utiliza varias veces la parte de _DIR_ se crea una funcion en helpers
        //$content = file_get_contents(__DIR__ . '/../../views/'. $this->view . '.php'); // agarra en una variable el contenido
        $content = file_get_contents(pathView($this->view)); 
        
        foreach($this->data as $key -> $value) {
            $search = '{{'.$key.'}}';
            $content = str_replace($search, $value, $content);

        }

        //$Layout = file_get_contents(__DIR__ . '/../../views/Layout.php'); // no necrsitamos caragar layout tendremos como un return
        //require __DIR__ . '/../../views/Layout.php'; // requiere carga en linea por eso no se necesita echo
        require pathView('Layout'); 
        //echo $Layout;
    }
}