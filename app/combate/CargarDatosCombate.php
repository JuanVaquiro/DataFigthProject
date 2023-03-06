<?php

namespace app\combate;

require_once __DIR__ . "./../../vendor/autoload.php";

use config\Conexion;
use PDO;
use Exception;

class CargarDatosCombate{

    private $combate;
    private $usuario;

    public function __construct($combate, $usuario){
        $this->combate = $combate;
        $this->usuario = $usuario;
    }

    public function validarDatos(){

        try {


            if( !is_numeric($this->combate) || !is_numeric($this->usuario) ){

                throw new Exception("ERROR!");

            }

        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function traerDatos(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $select = $con->prepare("CALL selectCombateActivo(?,?)");
        $select->bindParam(1, $this->usuario, PDO::PARAM_INT);
        $select->bindParam(2, $this->combate, PDO::PARAM_INT);
        $select->execute();

        $registros = $select->fetchAll();

        if (count($registros) > 0) {

            echo json_encode($registros);
    
        }
    
        else {
    
            echo json_encode("./../home");
    
        }

    }

}