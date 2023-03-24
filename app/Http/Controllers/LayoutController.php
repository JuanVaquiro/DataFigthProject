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
        elseif($this->segments[$posiciones-2] == "combate"){

            $this->titulo = "Configuracion De Combate";

        }
        elseif($this->segments[$posiciones-2] == "deportista"){

            $this->titulo = "Crear Deportista";

        } 
        elseif($this->segments[$posiciones-2] == "delegacion"){

            $this->titulo = "Crear Delegacion";

        }
        elseif($this->segments[$posiciones-2] == "combate-finalizado"){

            $this->titulo = "Combate Finalizado";

        }
        elseif($this->segments[$posiciones-2] == "evento"){

            $this->titulo = "Crear Evento";

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
            "Configuracion De Combate" => "viewConfigurarCombate.php",
            "Crear Deportista" => "viewCrearDeportista.php",
            "Crear Delegacion" => "viewCrearDelegacion.php",
            "Combate Finalizado" => "viewFinalizaCombate.php",
            "Crear Evento" => "viewCrearEvento.php"
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