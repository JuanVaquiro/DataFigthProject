<?php

namespace App\Http\Controllers;

class LayoutController{

    private $segments = [];

    private $titulo;

    // explode('/', $_SERVER['REQUEST_URI']);

    // print_r($segments);

    public function setTitulo(){

        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        if($_SERVER['REQUEST_URI'] == "/DataFight/public/"){

            $this->titulo = "Login";
    
        }
        else{

            $t = explode(".", $this->segments[3]);

            $this->titulo = $t[0];
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
            "control1" => 'viewControl1.php'
            
        };

        return $titulo;

    }
    
    // echo $_SERVER['REQUEST_URI'];

    // echo $view = $segments[$posicion];

    // echo count($segments);

    // echo $view;

}