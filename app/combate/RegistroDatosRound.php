<?php

namespace app\combate;

use config\Conexion;
use PDO;


class RegistroDatosRound{

    private $combate;
    private $round;
    private $puntosDeportista;
    private $faltasDeportista;
    private $ganarRound;
    private $idDeportista;
    private $idUsuario;

    public function __construct($idDeportista, $idUsuario, $combate = 0, 
    $round = 0, $puntosDeportista = 0, $faltasDeportista = 0,$ganarRound = 0){

        $this->combate = $combate;
        $this->round = $round;
        $this->puntosDeportista = $puntosDeportista;
        $this->faltasDeportista = $faltasDeportista;
        $this->ganarRound = $ganarRound;
        $this->idDeportista = $idDeportista;
        $this->idUsuario = $idUsuario;
        
    }

    public function registrarDatosRound(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertRegistroRound(?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->combate, PDO::PARAM_INT); 
        $registrar->bindParam(2, $this->round, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->puntosDeportista, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->faltasDeportista, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->ganarRound, PDO::PARAM_INT); 
        $registrar->bindParam(6, $this->idDeportista, PDO::PARAM_INT);
        $registrar->bindParam(7, $this->idUsuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Informacion de round registrada");
    
        }else {
    
            echo json_encode("Error Al Registrar la informacion");
    
        }

    }

}