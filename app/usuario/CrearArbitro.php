<?php

require_once("./vendor/autoload.php");

use config\Conexion;

class CrearArbitro{

    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $documento;
    private $sexo;
    private $email;
    private $telefono;
    private $fechaNacimiento;
    private $deporte;
    private $categoria;
    private $usuario;

    public function __construct($nombre, $apellido, $tipoDocumento, $documento, $sexo, 
    $telefono, $email, $fechaNacimiento, $deporte, $categoria, $usuario){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDocumento = $tipoDocumento;
        $this->documento = $documento;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->deporte = $deporte;
        $this->categoria = $categoria;
        $this->usuario = $usuario;

    }


    public function validarDatos(){
        
    }


    public function registrarArbitro(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        
        $registrar = $con->prepare("CALL crearArbitro(?,?,?,?,?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->nombre, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->apellido, PDO::PARAM_STR);
        $registrar->bindParam(3, $this->tipoDocumento, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->documento, PDO::PARAM_STR);
        $registrar->bindParam(5, $this->sexo, PDO::PARAM_INT);
        $registrar->bindParam(6, $this->telefono, PDO::PARAM_STR);
        $registrar->bindParam(7, $this->email, PDO::PARAM_STR);
        $registrar->bindParam(8, $this->fechaNacimiento, PDO::PARAM_STR);
        $registrar->bindParam(9, $this->deporte, PDO::PARAM_INT);
        $registrar->bindParam(10, $this->categoria, PDO::PARAM_INT);
        $registrar->bindParam(11, $this->usuario, PDO::PARAM_INT);
        $registrar->execute();
        
        if ($registrar) {
        
            echo json_encode("Registro Exitoso");
            
        }
            
        else {
            
            echo json_encode("Error Al Registrar");
            
        }

    }
    

}