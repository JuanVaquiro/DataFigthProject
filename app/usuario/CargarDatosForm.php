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

    public function __construct($usuario = 0, $estado = 1, $deporte = 1){

        $this->deporte = $deporte;
        $this->estado = $estado;
        $this->usuario = $usuario;

    }

    public function validarSesion(){

        if( isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){

            return new CargarDatosForm($_SESSION['idUser']);

        }else{
            return new CargarDatosForm();
        }

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
        $idUser = $_SESSION['idUser'];

        $select = $con->prepare("CALL getEventosUsuario(?,?)");
        $select->bindParam(1, $idUser, PDO::PARAM_INT);
        $select->bindParam(2, $this->estado, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getSex(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getSex(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getTipoDoc(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getTipoDocumento(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getEstados(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $pais = $_POST['pais'];

        $select = $con->prepare("CALL getDepartamentos(?)");
        $select->bindParam(1, $pais, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getPaises(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getPaises(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getCiudades(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $estado_departamento = $_POST['estado'];

        $select = $con->prepare("CALL getCiudades(?)");
        $select->bindParam(1, $estado_departamento, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getNivelesEvento(){

        $pdo = new Conexion();
        $con = $pdo->conexion();
        $paramt = 1;

        $select = $con->prepare("CALL getNivelesEvento(?)");
        $select->bindParam(1, $paramt, PDO::PARAM_INT);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();

        return $row;

    }

    public function getDataFormCombate(){

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

    public function getDataFormDeportista(){

        $array = [
            'sexo' => $this->getSex(),
            'tipo_doc' => $this->getTipoDoc(),
            'deportes' => $this->getDeportes(),
            'paises' => $this->getPaises()
        ];

        echo json_encode($array);

    }

    public function getDataFormDelegacion(){

        $array = [
            'pais' => $this->getPaises(),
            'deportes' => $this->getDeportes()
        ];

        echo json_encode($array);

    }

    public function getDataFormEvento(){
        $array = [
            'pais' => $this->getPaises(),
            'nivelEventos' => $this->getNivelesEvento()
        ];

        echo json_encode($array);
    }

    public function validarPost(){

        if(!$_POST){
            header("Location: ./");
        }

        if( isset($_POST['registro']) && $_POST['registro'] == true){

            $array = [
                'tipoDocumento' => $this->getTipoDoc()
            ];

            echo json_encode($array);
            die;
        }

        if(isset($_POST['config-combate']) && $_POST['config-combate'] == true){
            $this->getDataFormCombate();
            die;
        }

        if(isset($_POST['deportistas']) && $_POST['deportistas'] == true){
            $this->getDataFormDeportista();
            die;
        }

        if(isset($_POST['delegacion']) && $_POST['delegacion'] == true){
            $this->getDataFormDelegacion();
            die;
        }

        if(isset($_POST['evento']) && $_POST['evento'] == true){
            $this->getDataFormEvento();
            die;
        }

        if(isset($_POST['pais']) && is_numeric($_POST['pais'])){
            $array = [
                'estados' => $this->getEstados()
            ];
            echo json_encode($array);
            die;
        }

        if(isset($_POST['estado']) && is_numeric($_POST['estado'])){
            $array = [
                'ciudades' => $this->getCiudades()
            ];
            echo json_encode($array);
            die;
        }
        else{
            echo json_encode("No se encontro el recurso");
        }

    }

}