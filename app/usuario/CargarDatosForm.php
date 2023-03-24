<?php

namespace app\usuario;

// require_once __DIR__ . "./../../vendor/autoload.php";

use config\Conexion;
use PDO;
// use Exception;

class CargarDatosForm{

    private $deporte;
    private $estado;
    private $usuario;

    public function __construct($estado, $usuario, $deporte = 1){

        $this->deporte = $deporte;
        $this->estado = $estado;
        $this->usuario = $usuario;

    }

    public function validarDatos(){

    }

    public function getDeportistasActivos(){
        
        // $datos = new CargarDatosForm(1, $_SESSION['idUSer']);

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $select = $con->prepare("CALL getDeportistasActivos(?,?,?)");
        $select->bindParam(1, $this->deporte, PDO::PARAM_INT);
        $select->bindParam(2, $this->usuario, PDO::PARAM_INT);
        $select->bindParam(3, $this->estado, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getDelegacionesActivas(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $select = $con->prepare("CALL getDelegacionesUser(?,?)");
        $select->bindParam(1, $this->usuario, PDO::PARAM_INT);
        $select->bindParam(2, $this->deporte, PDO::PARAM_INT);
        // $select->bindParam(3, $this->estado, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;
        
    }

    public function getDeportes(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getDeportes(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getFasesCombate(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getFasesCombate(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getArbitros(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        // $paramt = 1;

        $select = $con->prepare("CALL getArbitrosUser(?,?,?)");
        $select->bindParam(1, $this->usuario, PDO::PARAM_INT);
        $select->bindParam(2, $this->deporte, PDO::PARAM_INT);
        $select->bindParam(3, $this->estado, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getEventos(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getEventos(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getData(){

        $array = [
                'deportistas' => $this->getDeportistasActivos(),
                'delegaciones' => $this->getDelegacionesActivas(),
                'deportes' => $this->getDeportes(),
                'fases' => $this->getFasesCombate(),
                'arbitros' => $this->getArbitros(),
                'eventos' => $this->getEventos()
        ];

        echo json_encode($array);
    }

}