<?php

namespace app\usuario;

use config\Conexion;
use PDO;

class CrearDelegacion{

    private $name;
    private $descripcion;
    private $ciudad;
    private $departamento;
    private $usuario;
    private $iniciales;

    public function __construct($name = null, $descripcion = null, $ciudad = 0, 
    $departamento = 0, $usuario = 0, $iniciales = null){

        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->ciudad = $ciudad;
        $this->departamento = $departamento;
        $this->usuario = $usuario;
        $this->iniciales = $iniciales;
        
    }

    public function validarDatos(){

    }

    public function registrarDelegacion(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertDelegacion(?,?,?,?,?)");
        $registrar->bindParam(1, $this->name, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->descripcion, PDO::PARAM_STR);
        $registrar->bindParam(3, $this->ciudad, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->usuario, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->iniciales, PDO::PARAM_STR);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Delegacion registrada");
    
        }
    
        else {
    
            echo json_encode("Error al registrar Delegacion");
    
        }

    }

    public function validarPost(){

        if( isset($_POST) && !empty($_POST) && isset($_POST['floating_delegacion']) 
        && isset($_POST['ciudad']) && !empty($_POST['floating_delegacion']) && !empty($_POST['ciudad'])){

            $delegacion = new CrearDelegacion(
                $_POST['floating_delegacion'],
                $_POST['floating_description'],
                $_POST['ciudad'],
                $_POST['departamento'],
                $_SESSION['idUser'],
                $_POST['floating_siglas'],
            );

            $delegacion->validarDatos();

            $delegacion->registrarDelegacion();

            // echo json_encode($_POST);

        }else{
            echo json_encode("hola");
        }

    }

}