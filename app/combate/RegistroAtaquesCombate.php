<?php

namespace app\combate;

require_once("./../../vendor/autoload.php");

use config\Conexion;
use PDO;
class RegistroAtaquesCombate{

    private $id_golpe_tecnica;
    private $posicionGolpe;
    private $ubicacion_Golpe;
    private $id_combate;
    private $id_deportista;
    private $golpeo;
    private $punto;
    private $round;
    private $segundoRound;
    private $id_usuario;

    public function __construct($id_golpe_tecnica = null, $posicionGolpe = null, $ubicacion_Golpe = null, 
    $golpeo = null, $punto = null, $round = null, $segundoRound = null, $id_usuario = 1,  $id_combate = 1, $id_deportista = 1){

        $this->id_golpe_tecnica = $id_golpe_tecnica;
        $this->posicionGolpe = $posicionGolpe;
        $this->ubicacion_Golpe = $ubicacion_Golpe;
        $this->id_combate = $id_combate;
        $this->id_deportista = $id_deportista;
        // $this->posicion_ataque = $posicion_ataque;
        $this->golpeo = $golpeo;
        $this->punto = $punto;
        $this->round = $round;
        $this->segundoRound = $segundoRound;
        $this->id_usuario = $id_usuario;
        
    }

    public function registrarAtaque(){
        
        // require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertAtaqueCombate(?,?,?,?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->id_combate, PDO::PARAM_INT);
        $registrar->bindParam(2, $this->id_deportista, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->id_golpe_tecnica, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->posicionGolpe, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->golpeo, PDO::PARAM_INT);
        $registrar->bindParam(6, $this->ubicacion_Golpe, PDO::PARAM_INT);
        $registrar->bindParam(7, $this->punto, PDO::PARAM_INT);
        $registrar->bindParam(8, $this->round, PDO::PARAM_INT);
        $registrar->bindParam(9, $this->segundoRound, PDO::PARAM_INT); 
        $registrar->bindParam(10, $this->id_usuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar) {

            // echo json_encode("Registro Exitoso");
            echo json_encode("Registro De Ataque Guardado");
    
        }
    
        else {
    
            echo json_encode("Error Al Registrar");
    
        }

        // echo json_encode($this->segundoRound);

    }

    public function obtenerSegundos(){

        if(strlen($this->segundoRound) != 1){
            
            $tiempo = explode('.',$this->segundoRound);

            $segundos = $tiempo[1];

            $minutos = $tiempo[0];

            $this->segundoRound = ($segundos + ($minutos*60));

        }else{
            $this->segundoRound = ($this->segundoRound*60);
        }

    }

}