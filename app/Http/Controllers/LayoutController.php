<?php

namespace App\Http\Controllers;

class LayoutController{

    private $segments = [];

    private $titulo;

    // explode('/', $_SERVER['REQUEST_URI']);

    // print_r($segments);

    public function setTitulo(){

        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $posiciones = count($this->segments);

        if($this->segments[$posiciones-2] == "public"){

            $this->titulo = "Login";
            // $this->titulo = $this->segments[$posiciones-2];
    
        }
        else{

            // $t = explode(".", $this->segments[3]);

            $this->titulo = $this->segments[$posiciones-2];
        }

        #echo $this->titulo;
    
    }

    public function getTitulo(){

        return $this->titulo;

    }

    public function setBody(String $titulo){

        $titulo = match($titulo){

            "Login" => "viewLogin.php",
            "registro" => "viewRegistroUsuario.php",
            "home" => "viewHome.php",
            "control" => "viewControl.php",
            "prueba" => "viewPrueba.php",
            "configurarCombate" => "viewConfigurarCombate.php"
        };

        return $titulo;

    }


    public function obtenerUrl($titulo){

        if($titulo == "Login"){

            return "./../";

        }
        else{
            return "./../../";
        }

    }
    
    // echo $_SERVER['REQUEST_URI'];

    // echo $view = $segments[$posicion];

    // echo count($segments);

    // echo $view;

}