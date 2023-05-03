<?php

namespace app\combate;

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\combate\RegistroAtaquesCombate;
use App\combate\RegistroFaltasCombate;
use App\combate\CargarDatosCombate;
use App\combate\UpdateUltimoAtaque;
use App\combate\RegistroDatosRound;

class AccionControl{

    public function validarPost(){

        if($_POST && isset($_POST['combate']) && !empty($_POST['combate'])){

            $datosCombate = new CargarDatosCombate(
                $_POST['combate'], 
                $_SESSION['idUser'], 
                $_POST['deportista']);
                
            $datosCombate->validarDatos();
            $datosCombate->traerDatos();
            // $datosCombate->obtenerIdDeportista();

        }
        elseif( $_POST && !empty($_POST) && isset($_POST['golpe']) && !isset($_POST['update']) ){

            $registro = new RegistroAtaquesCombate(
                $_POST['golpe'],
                $_POST['posicion'],
                $_POST['ubicacion'],
                $_POST['golpeo'],
                $_POST['punto'],
                $_POST['round'],
                $_POST['segundo'],
                $_SESSION['idUser'],
                $_SESSION['combate'],
                // $_SESSION['deportista'],
                $_SESSION['idDeportista']
            );

            $registro->obtenerSegundos();
            $registro->registrarAtaque();

        }
        elseif( $_POST && !empty($_POST) && isset($_POST['falta']) ){

            $registro = new RegistroFaltasCombate(
                $_POST['falta'],
                $_POST['tiempo'],
                $_POST['round'],
                $_SESSION['combate'],
                $_SESSION['idDeportista'],
                $_SESSION['idUser']
            );

            $registro->obtenerSegundos();
            $registro->registrarFalta();

        }
        elseif( $_POST && !empty($_POST) && isset($_POST['update'])){

            $datos = new UpdateUltimoAtaque(
                $_POST['golpe'],
                $_POST['posicion'],
                $_POST['golpeo'],
                $_POST['punto'],
                $_SESSION['ultimoAtaque'],
                $_POST['update'],
                $_POST['ubicacion']
            );
            
            $datos->actualizarAtaque();

        }
        elseif( $_POST && isset($_POST['puntos']) ){

            $datosRound = new RegistroDatosRound(
                $_SESSION['idDeportista'],
                $_SESSION['idUser'],
                $_SESSION['combate'],
                $_POST['round'],
                $_POST['puntos'],
                $_POST['faltas'],
                $_POST['gano']
            );

            $datosRound->registrarDatosRound();

        }
        else{
            header("Location: ./../");
        }
        
    }

}