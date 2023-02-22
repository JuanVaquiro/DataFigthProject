<?php

use config\Conexion;

class UpadateCombate{

    private $fechaHoraFin;
    private $pausas;
    private $coment;
    private $resultado1;
    private $resultado2;
    private $combate;


    public function __construct($fechaHoraFin, $pausas, $coment, 
    $resultado1, $resultado2, $combate){

        $this->fechaHoraFin = $fechaHoraFin;
        $this->pausas = $pausas;
        $this->coment = $coment;
        $this->resultado1 = $resultado1;
        $this->resultado2 = $resultado2;
        $this->combate = $combate;
        
    }

    public function validarDatos(){

    }

    public function updateCombat(){

        
        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertFaltaCombate(?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->fechaHoraFin, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->pausas, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->coment, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->resultado1, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->resultado2, PDO::PARAM_INT);
        $registrar->bindParam(6, $this->combate, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar) {

            echo json_encode("Datos De Combate Almacenados");
    
        }
    
        else {
    
            echo json_encode("Ha ocurrido un error al intentar almacenar los datos");
    
        }

    }

}