<?php

namespace app\combate;

use config\Conexion;
use PDO;

class UpdateUltimoAtaque{

    private $tecnica;
    private $posicion;
    private $golpeo;
    private $ubicacion;
    private $punto;
    private $ataque;

    public function __construct($tecnica, $posicion, $golpeo, $ubicacion, $punto, $ataque){
        $this->tecnica = $tecnica;
        $this->posicion = $posicion;
        $this->golpeo = $golpeo;
        $this->ubicacion = $ubicacion;
        $this->punto = $punto;
        $this->ataque = $ataque;
    }

    public function validarDatos(){

    }

    public function actualizarAtaque(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL updateUltimoAtaque(?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->tecnica, PDO::PARAM_INT);
        $registrar->bindParam(2, $this->posicion, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->golpeo, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->ubicacion, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->punto, PDO::PARAM_INT);
        $registrar->bindParam(6, $this->ataque, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar) {

            echo json_encode("Ataque actualizado");
    
        }
    
        else {
    
            echo json_encode("Ha ocurrido un error al intentar actualizar el combate");
    
        }
    }

}