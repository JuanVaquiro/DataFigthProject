<?php

namespace app\usuario;
use config\Conexion;
use Exception;
use PDO;

class CrearEvento{

    private $nameEvento;
    private $ciudad;
    private $nivelEvento;
    private $usuario;
    // private $deporte;
    // private $departamento;

    public function __construct($nameEvento = "", $ciudad = 0, $nivelEvento = 0, $usuario = 0){

        $this->nameEvento = $nameEvento;
        // $this->departamento = $departamento;
        $this->ciudad = $ciudad;
        $this->nivelEvento = $nivelEvento;
        $this->usuario = $usuario;
        // $this->deporte = $deporte;
        
    }

    public function registrarEvento(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL crearEvento(?,?,?,?)");
        $registrar->bindParam(1, $this->nameEvento, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->ciudad, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->nivelEvento, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->usuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Registro Exitoso");
    
        }
    
        else {
    
            echo json_encode("Error al registrar evento");
    
        }

    }

    public function validarDatos(){

        try {

            if( !trim($this->nameEvento) || !trim($this->ciudad) || !trim($this->nivelEvento) ){
                
                throw new Exception("Complete los campos");
    
            }

            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ0-9]{1,100}$/";

            if( !preg_match($pattern, trim($this->nameEvento)) ){

                throw new Exception("Los nombres para eventos deben de contener maximo 100 caracteres, no se permiten numeros o caracteres especiales");

            }

            $pattern = "/^[0-9]$/";

            if( !preg_match($pattern, trim($this->ciudad)) || !$this->ciudad >= 1){

                throw new Exception("La ciudad no es valida");

            }

            if( !preg_match($pattern, trim($this->nivelEvento)) || !$this->nivelEvento >= 1){

                throw new Exception("El nivel del evento no es valido");

            }

        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function validarPost(){

        try {

            if( !$_POST ){

                header("Location: ./../");

            }

            if( !isset($_POST['floating_evento']) ){

                throw new Exception("No se ha enviado el campo evento");

            }

            if( !isset($_POST['pais']) ){

                throw new Exception("No se ha enviado el campo pais");

            }

            if( !isset($_POST['departamento']) ){

                throw new Exception("No se ha enviado el campo departamento");

            }

            if( !isset($_POST['ciudad']) ){

                throw new Exception("No se ha enviado el campo ciudad");

            }

            if( !isset($_POST['nivel-evento']) ){

                throw new Exception("No se ha enviado el campo nivel evento");

            }

        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

        // if(isset($_POST) && !empty($_POST) && isset($_POST['floating_evento']) 
        // && !empty($_POST['floating_evento'])){

        //     $evento = new CrearEvento(
        //         $_POST['floating_evento'],
        //         $_POST['departamento'],
        //         $_POST['ciudad'],
        //         $_POST['nivel-evento'],
        //         $_SESSION['idUser']
        //     );

        //     $evento->registrarEvento();
        //     // echo json_encode($_POST);
        // }else{
        //     echo json_encode("adios");
        // }

    }

}