<?php

use config\Conexion;

class CrearDeportista{

    private $ciudad;
    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $documento;
    private $sexo;
    private $email;
    private $telefono;
    private $fechaNacimiento;
    private $usuario;
    private $deporte;

    public function __construct($ciudad, $nombre, $apellido, $tipoDocumento, $documento, 
    $sexo, $email, $telefono, $fechaNacimiento, $usuario, $deporte){

        $this->ciudad = $ciudad;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDocumento = $tipoDocumento;
        $this->documento = $documento;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->usuario = $usuario;
        $this->deporte = $deporte;
        
    }

    public function validarDatos(){

    }

    public function registrarDeportista(){

        // require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();
        
        $registrar = $con->prepare("CALL insertDeportista(?,?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->ciudad, PDO::PARAM_INT);
        $registrar->bindParam(2, $this->nombre, PDO::PARAM_STR);
        $registrar->bindParam(3, $this->apellido, PDO::PARAM_STR);
        $registrar->bindParam(4, $this->tipoDocumento, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->documento, PDO::PARAM_STR);
        $registrar->bindParam(6, $this->sexo, PDO::PARAM_INT);
        $registrar->bindParam(7, $this->email, PDO::PARAM_STR);
        $registrar->bindParam(8, $this->telefono, PDO::PARAM_STR);
        $registrar->bindParam(9, $this->fechaNacimiento, PDO::PARAM_STR);
        $registrar->bindParam(10, $this->usuario, PDO::PARAM_INT);
        $registrar->bindParam(11, $this->deporte, PDO::PARAM_INT);
        $registrar->execute();
        
        if ($registrar) {
        
            echo json_encode("Registro Exitoso");
            
        }
            
        else {
            
            echo json_encode("Error Al Registrar");
            
        }

    }

}