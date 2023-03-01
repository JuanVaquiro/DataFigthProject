<?php

namespace app\combate;

require_once __DIR__ . "./../../vendor/autoload.php";

use App\combate\RegistroAtaquesCombate;
use App\combate\RegistroFaltasCombate;

class AccionControl{

    public function validarPost(){

        if( $_POST && !empty($_POST) && isset($_POST['golpe']) ){

            $registro = new RegistroAtaquesCombate(
                $_POST['golpe'],
                $_POST['posicion'],
                $_POST['ubicacion'],
                $_POST['golpeo'],
                $_POST['punto'],
                $_POST['round'],
                $_POST['segundo']
            );

            $registro->obtenerSegundos();
            $registro->registrarAtaque();

        }
        elseif( $_POST && !empty($_POST) && isset($_POST['falta']) ){

            $registro = new RegistroFaltasCombate(
                $_POST['falta'],
                $_POST['tiempo'],
                $_POST['round']
            );

            $registro->obtenerSegundos();
            $registro->registrarFalta();

        }
        else{
            header("Location: ./../");
        }
        
    }

}