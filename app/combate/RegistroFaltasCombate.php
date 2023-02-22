<?php

use config\Conexion;

class RegistroFaltasCombate{

    private $id_combate;
    private $id_deportista;
    private $id_falta;
    private $round;
    private $segundoRound;
    private $id_usuario;

    public function __construct($id_combate, $id_deportista, $id_falta, $round, $segundoRound, $id_usuario){

        $this->id_combate = $id_combate;
        $this->id_deportista = $id_deportista;
        $this->id_falta = $id_falta;
        $this->round = $round;
        $this->segundoRound = $segundoRound;
        $this->id_usuario = $id_usuario;
        
    }

    public function registrarAtaque(){
        
        require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertFaltaCombate(?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->id_combate, PDO::PARAM_INT);
        $registrar->bindParam(2, $this->id_deportista, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->id_falta, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->round, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->segundoRound, PDO::PARAM_INT); 
        $registrar->bindParam(6, $this->id_usuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar) {

            // echo json_encode("Registro Exitoso");
            echo json_encode("Registro De Falta Guardado");
    
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