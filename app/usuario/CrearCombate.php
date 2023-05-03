<?php

namespace app\usuario;

require_once __DIR__ . "/../../vendor/autoload.php";

use Exception;
use config\Conexion;
use PDO;
use DateTime;

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

    public function __construct($deportista1 = 0, $delegacion1 = 0, $deportista2 = 0, $delegacion2 = 0, $evento = 0, 
    $arbitro = 0, $horaFechaInicio = 0, $segundosRound = 0, $nRounds = 0, $tipoRonda = 0, $usuario = 0, $deporte = 1){

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


            if( !trim($this->deportista1) || !trim($this->delegacion1) || !trim($this->deportista2) || !trim($this->delegacion2) 
                || !trim($this->tipoRonda) || !trim($this->nRounds) || !trim($this->segundosRound) || !trim($this->horaFechaInicio) 
                || !trim($this->arbitro) || !trim($this->evento) ){

                throw new Exception("Complete los campos");

            }

            $pattern = "/^[0-9]+$/";

            if( !preg_match($pattern, trim($this->deportista1)) ){

                throw new Exception("El valor para el deportista1 no es valido");

            }

            if( !preg_match($pattern, trim($this->deportista2)) ){

                throw new Exception("El valor para el deportista2 no es valido");

            }

            if( !preg_match($pattern, trim($this->delegacion1)) ){

                throw new Exception("El valor para la delegacion1 no es valido");

            }

            if( !preg_match($pattern, trim($this->delegacion2)) ){

                throw new Exception("El valor para la delegacion2 no es valido");

            }

            $pattern = "/^[0-9]{1,1}+$/";

            if( !preg_match($pattern, trim($this->tipoRonda)) ){

                throw new Exception("El valor para la fase o ronda no es valido");

            }

            $pattern = "/^[0-9]{1,3}+$/";

            if( !preg_match($pattern, trim($this->nRounds)) ){

                throw new Exception("El valor para el numero de rounds no es valido");

            }

            $pattern = "/^[0-9]{1,2}+$/";

            if( !preg_match($pattern, trim($this->segundosRound)) ){

                throw new Exception("El valor para el tiempo de los rounds no es valido");

            }

            $fecha_dt = DateTime::createFromFormat('Y-m-d\TH:i', $this->horaFechaInicio);

            // $timestamp = strtotime($this->horaFechaInicio);


            if( !$fecha_dt ){

                // echo json_encode($this->horaFechaInicio);
                throw new Exception("El valor Para la fecha y hora no es valida");

            }

            $pattern = "/^[0-9]+$/";

            if( !preg_match($pattern, trim($this->arbitro)) ){

                throw new Exception("El valor Para Arbitro no es valido");

            }


            if( !preg_match($pattern, trim($this->evento)) ){

                throw new Exception("El valor Para Evento no es valido");

            }


            // $pattern = "/^[0-9]{1,3}$/";

            // if(!preg_match($pattern, trim($this->deporte))){

            //     throw new Exception("Dato no valido para deporte");

            // }

            // echo "hola";


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die();
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
        $registrar->bindParam(9, $this->segundosRound, PDO::PARAM_INT);
        $registrar->bindParam(10, $this->nRounds, PDO::PARAM_INT);
        $registrar->bindParam(11, $this->tipoRonda, PDO::PARAM_INT);
        $registrar->bindParam(12, $this->usuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Registro Exitoso");
    
        }
    
        else {
    
            echo json_encode("Error");
    
        }

    }

    public function actualizarDatosCombate($comentario = "", $resultado = 10, $pausas = 0){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        if($_SESSION['deportista'] == 1 && $resultado > 0){
            $registrar = $con->prepare("CALL updateCombateDeportista1(?,?,?,?)");  
        }elseif($_SESSION['deportista'] >=2 && $resultado > 0){
            $registrar = $con->prepare("CALL updateCombateDeportista2(?,?,?,?)");
        }
        else{
            echo json_encode('No se encotro el recurso');
            die;
        }
        $registrar->bindParam(1, $pausas, PDO::PARAM_INT);
        $registrar->bindParam(2, $comentario, PDO::PARAM_STR);
        $registrar->bindParam(3, $resultado, PDO::PARAM_INT);
        $registrar->bindParam(4, $_SESSION['combate'], PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Registro Exitoso");
    
        }else{
    
            echo json_encode("Error");
    
        }

        // echo json_encode($_POST);
        
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

        try {

            if(!$_POST){

                header("Location: ./");
            }
    
            if( !isset($_POST['deportista_1']) ){

                throw new Exception("El deportista #1 no se ha enviado");
    
            }

            if( !isset($_POST['delegacion_1']) ){

                throw new Exception("La delegacion #1 no se ha enviado");
    
            }

            if( !isset($_POST['deportista_2']) ){

                throw new Exception("El deportista #2 no se ha enviado");
    
            }

            if( !isset($_POST['delegacion_2']) ){

                throw new Exception("La delegacion #2 no se ha enviado");
    
            }

            // if( !isset($_POST['deporte-radio']) ){

            //     throw new Exception("El campo deporte no se ha enviado");
    
            // }

            if( !isset($_POST['fase-ronda']) ){

                throw new Exception("El campo Fase/Ronda no se ha enviado");
    
            }

            if( !isset($_POST['numero-round-radio']) ){

                throw new Exception("Porfavor seleccione un numero de round");
    
            }

            if( !isset($_POST['duracion-round-radio']) ){

                throw new Exception("Porfavor seleccione la duracion del round");
    
            }

            if( !isset($_POST['datetime_local']) ){

                throw new Exception("El campo fecha y hora no se ha enviado");
    
            }

            if( !isset($_POST['arbitro']) ){

                throw new Exception("El arbitro no se ha enviado");
    
            }

            if( !isset($_POST['evento']) ){

                throw new Exception("El evento no se ha enviado");
    
            }
            
        } catch (Exception $e) {

            echo json_encode($e->getMessage());
            die;

        }

        // if(isset($_POST) && isset($_POST['deportista_1']) && !empty($_POST['deportista_1'])){
        //     // echo json_encode("Hello");
        //     // $deporte=1;
        //     $combate = new CrearCombate(
        //         $_POST['deporte-radio'],
        //         $_POST['deportista_1'],
        //         $_POST['delegacion_1'],
        //         $_POST['deportista_2'],
        //         $_POST['delegacion_2'],
        //         $_POST['evento'],
        //         $_POST['arbitro'],
        //         $_POST['datetime_local'],
        //         $_POST['duracion-round-radio'],
        //         $_POST['numero-round-radio'],
        //         $_POST['fase-ronda'],
        //         $_SESSION['idUser']
        //     );

        //     $combate->obtenerSegundos();
        //     $combate->registrarCombate();

        // }else{
        //     echo json_encode("Adios");
        // }

    }

    

}