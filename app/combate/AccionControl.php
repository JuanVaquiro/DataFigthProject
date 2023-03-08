<?php

namespace app\combate;

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\combate\RegistroAtaquesCombate;
use App\combate\RegistroFaltasCombate;
use App\combate\CargarDatosCombate;

class AccionControl{

    public function validarPost(){

        if($_POST && isset($_POST['combate']) && !empty($_POST['combate'])){

            $datosCombate = new CargarDatosCombate($_POST['combate'], $_SESSION['idUser']);
            $datosCombate->validarDatos();
            $datosCombate->traerDatos();

        }
        elseif( $_POST && !empty($_POST) && isset($_POST['golpe']) ){

            $registro = new RegistroAtaquesCombate(
                $_POST['golpe'],
                $_POST['posicion'],
                $_POST['ubicacion'],
                $_POST['golpeo'],
                $_POST['punto'],
                $_POST['round'],
                $_POST['segundo'],
                $_SESSION['idUser']
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