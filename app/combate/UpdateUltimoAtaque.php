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
    private $update;

    public function __construct($tecnica, $posicion, $golpeo, 
    $punto, $ataque, $update, $ubicacion){
        $this->tecnica = $tecnica;
        $this->posicion = $posicion;
        $this->golpeo = $golpeo;
        $this->ubicacion = $ubicacion;
        $this->punto = $punto;
        $this->ataque = $ataque;
        $this->update = $update;
    }

    public function validarDatos(){

    }

    public function actualizarAtaque(){

        if($this->update == true){
            // echo json_encode($_POST);

            $pdo = new Conexion();
            $con = $pdo->conexion();

            $select = $con->prepare("CALL getUltimoAtaque(?,?,?)");
            $select->bindParam(1, $_SESSION['idUser'], PDO::PARAM_INT);
            $select->bindParam(2, $_SESSION['combate'], PDO::PARAM_INT);
            $select->bindParam(3, $_SESSION['idDeportista'], PDO::PARAM_INT);
            $select->execute();

            $row = $select->fetch(PDO::FETCH_ASSOC);

            $select->closeCursor();

            // if($this->tecnica == 0 || $this->tecnica == $row['id_golpe_tecnica']){

            //     $this->tecnica = $row['id_golpe_tecnica'];

            // }

            // if($this->posicion == null){
            //     $this->posicion = $row['posicion_ataque'];
            // }

            if(count($row) > 0){

                
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

    }

}