<?php

use config\Conexion;

class CrearEvento{

    private $nameEvento;
    private $ciudad;
    private $nivelEvento;
    private $usuario;

    public function __construct($nameEvento, $ciudad, $nivelEvento, $usuario){

        $this->nameEvento = $nameEvento;
        $this->ciudad = $ciudad;
        $this->nivelEvento = $nivelEvento;
        $this->usuario = $usuario;
        
    }

    public function validarDatos(){

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

        if ($registrar) {

            echo json_encode("Evento registrado");
    
        }
    
        else {
    
            echo json_encode("Error al registrar evento");
    
        }

    }

}