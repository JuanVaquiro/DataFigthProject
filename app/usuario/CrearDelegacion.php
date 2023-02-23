<?php

use config\Conexion;

class CrearDelegacion{

    private $name;
    private $descripcion;
    private $ciudad;
    private $usuario;
    private $iniciales;

    public function __construct($name, $descripcion, $ciudad, $usuario, $iniciales){

        $this->name = $name;
        $this->descripcion = $descripcion;
        $this->ciudad = $ciudad;
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

        if ($registrar) {

            echo json_encode("Evento registrado");
    
        }
    
        else {
    
            echo json_encode("Error al registrar evento");
    
        }

    }

}