<?php

namespace app\usuario;

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

    public function __construct($deporte = 0, $deportista1 = 0, $delegacion1 = 0, $deportista2 = 0, $delegacion2 = 0, $evento = 0, 
    $arbitro = 0, $horaFechaInicio = 0, $segundosRound = 0, $nRounds = 0, $tipoRonda = 0, $usuario = 0){

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

        $registrar = $con->prepare("CALL crearCombate(?,?,?,?,?,?,?,?,?,?,?,?)");
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

            echo json_encode("Registro Exitoso");
    
        }
    
        else {
    
            echo json_encode("Error");
    
        }

    }

    public function obtenerSegundos(){

        if(strlen($this->segundosRound) != 1){
            
            $tiempo = explode('.',$this->segundosRound);

            $segundos = $tiempo[1];

            $minutos = $tiempo[0];

            $this->segundosRound = ($segundos + ($minutos*60));

        }else{
            $this->segundosRound = ($this->segundosRound*60);
        }

    }

    public function validarPost(){

        if(isset($_POST) && isset($_POST['deportista_1']) && !empty($_POST['deportista_1'])){
            // echo json_encode("Hello");
            // $deporte=1;
            $combate = new CrearCombate(
                $_POST['deporte-radio'],
                $_POST['deportista_1'],
                $_POST['delegacion_1'],
                $_POST['deportista_2'],
                $_POST['delegacion_2'],
                $_POST['evento'],
                $_POST['arbitro'],
                $_POST['datetime_local'],
                $_POST['duracion-round-radio'],
                $_POST['numero-round-radio'],
                $_POST['fase-ronda'],
                $_SESSION['idUser']
            );

            $combate->obtenerSegundos();
            $combate->registrarCombate();

        }else{
            echo json_encode("Adios");
        }

    }

    

}