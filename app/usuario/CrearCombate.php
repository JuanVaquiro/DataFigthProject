<?php

namespace App\usuario;

require_once __DIR__ . "/../../vendor/autoload.php";

use Exception;
use config\Conexion;
use PDO;

class CrearCombate{

    private $deporte;
    private $deportista1;
    private $delegacion1;
    private $deportista2;
    private $delegacion2;
    private $evento;
    private $arbitro;
    private $horaFechaInicio;
    private $segundosRound;
    private $nRounds;
    private $tipoRonda;
    private $usuario;

    public function __construct($deporte, $deportista1, $delegacion1, $deportista2, $delegacion2, $evento, 
    $arbitro, $horaFechaInicio, $segundosRound, $nRounds, $tipoRonda, $usuario){

        $this->deporte = $deporte;
        $this->deportista1 = $deportista1;
        $this->delegacion1 = $delegacion1;
        $this->deportista2 = $deportista2;
        $this->delegacion2 = $delegacion2;
        $this->evento = $evento;
        $this->arbitro = $arbitro;
        $this->horaFechaInicio = $horaFechaInicio;
        $this->segundosRound = $segundosRound;
        $this->nRounds = $nRounds;
        $this->tipoRonda = $tipoRonda;
        $this->usuario = $usuario;

    }

    public function validarDatos(){

        try {


            if(!trim($this->deporte) && !trim($this->deportista1)){

                throw new Exception("Complete los capos");

            }

            $pattern = "/^[0-9]{1,3}$/";

            if(!preg_match($pattern, trim($this->deporte))){

                throw new Exception("Dato no valido para deporte");

            }

            // echo "hola";


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            // die();
        }

        // echo "hola";

    }

    public function registrarCombate(){

        // require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertUsuario(?,?,?,?,?,?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->deporte, PDO::PARAM_INT);
        $registrar->bindParam(2, $this->deportista1, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->delegacion1, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->deportista2, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->delegacion2, PDO::PARAM_INT);
        $registrar->bindParam(6, $this->evento, PDO::PARAM_INT);
        $registrar->bindParam(7, $this->arbitro, PDO::PARAM_INT);
        $registrar->bindParam(8, $this->horaFechaInicio, PDO::PARAM_STR);
        $registrar->bindParam(9, $this->segundosRound, PDO::PARAM_STR);
        $registrar->bindParam(10, $this->nRounds, PDO::PARAM_INT);
        $registrar->bindParam(11, $this->tipoRonda, PDO::PARAM_INT);
        $registrar->bindParam(12, $this->usuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar) {

            echo json_encode("Combate Creado");
    
        }
    
        else {
    
            echo json_encode("Error Al Crear Combate");
    
        }

    }

    

}