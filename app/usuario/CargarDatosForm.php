<?php

namespace app\usuario;

// require_once __DIR__ . "./../../vendor/autoload.php";

use config\Conexion;
use PDO;
use Exception;

class CargarDatosForm{

    private $deporte;
    private $estado;
    private $usuario;

    public function __construct($estado, $usuario, $deporte = 1){

        $this->deporte = $estado;
        $this->estado = $estado;
        $this->usuario = $usuario;

    }

    public function validarDatos(){

    }

    public function getDeportistasActivos(){
        
        // $datos = new CargarDatosForm(1, $_SESSION['idUSer']);

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $select = $con->prepare("CALL getDeportistasActivos(?,?)");
        $select->bindParam(1, $this->deporte, PDO::PARAM_INT);
        $select->bindParam(2, $this->usuario, PDO::PARAM_INT);
        $select->execute();

        $row = $select->fetchAll(PDO::FETCH_ASSOC);

        $array = [
                'deportistas' => $row
        ];

        echo json_encode($array);

    }

}