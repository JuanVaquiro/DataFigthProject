<?php

namespace app\usuario;

use config\Conexion;
use Exception;
use PDO;

class CrearDelegacion{

    private $name;
    private $descripcion;
    private $ciudad;
    // private $departamento;
    private $usuario;
    private $iniciales;
    private $deporte;

    public function __construct($name = null, $descripcion = null, $ciudad = 0, $usuario = 0, $iniciales = null, $deporte = 0){

        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->ciudad = $ciudad;
        // $this->departamento = $departamento;
        $this->usuario = $usuario;
        $this->iniciales = $iniciales;
        $this->deporte = $deporte;
        
    }

    public function registrarDelegacion(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertDelegacion(?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->name, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->descripcion, PDO::PARAM_STR);
        $registrar->bindParam(3, $this->ciudad, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->usuario, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->iniciales, PDO::PARAM_STR);
        $registrar->bindParam(6, $this->deporte, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Registro Exitoso");
    
        }
    
        else {
    
            echo json_encode("Error al registrar Delegacion");
    
        }

    }

    public function validarDatos(){

        try {

            // if( !trim($this->name) || !trim($this->descripcion) || !trim($this->ciudad) || !trim($this->iniciales) || !trim($this->deporte) ){
                
            //     throw new Exception("Complete los campos");
    
            // }

            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ0-9]{3,50}$/";

            if( !preg_match($pattern, trim($this->name)) ){

                throw new Exception("Los nombres para delegaciones deben de contener minimo 3 y maximo 50 caracteres, no se permiten numeros o caracteres especiales");

            }

            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ0-9]{0,100}$/";

            if( !preg_match($pattern, trim($this->descripcion)) ){

                throw new Exception("La descripcion debe contener maximo 100 caracteres, no se permiten caracteres especiales");

            }

            $pattern = "/^[a-zA-Z]+$/";

            if( !preg_match($pattern, trim($this->iniciales)) ){

                throw new Exception("Las inciales deben de contener minimo 1 caracter y maximo 15. No se permiten caracteres especiales");

            }

            $pattern = "/^[0-9]$/";

            if( !preg_match($pattern, trim($this->ciudad)) ){

                throw new Exception("La ciudad no es valida");

            }

            if( !preg_match($pattern, trim($this->deporte)) ){

                throw new Exception("El deporte no es valido");

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

            if( !isset($_POST['floating_delegacion']) ){

                throw new Exception("El campo delegacion no se ha enviado");

            }

            if( !isset($_POST['floating_description']) ){

                throw new Exception("El campo descripcion no se ha enviado");

            }

            if( !isset($_POST['floating_siglas']) ){

                throw new Exception("El campo siglas no se ha enviado");

            }

            if( !isset($_POST['pais']) ){

                throw new Exception("El campo pais no se ha enviado");

            }

            if( !isset($_POST['departamento']) ){

                throw new Exception("El campo departamento no se ha enviado");

            }

            if( !isset($_POST['ciudad']) ){

                throw new Exception("El campo ciudad no se ha enviado");

            }

            if( !isset($_POST['deporte']) ){

                throw new Exception("El campo deporte no se ha enviado");

            }

        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

}