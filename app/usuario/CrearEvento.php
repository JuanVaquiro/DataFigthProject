<?php

namespace app\usuario;
use config\Conexion;
use PDO;

class CrearEvento{

    private $nameEvento;
    private $ciudad;
    private $nivelEvento;
    private $usuario;
    private $departamento;

    public function __construct($nameEvento = "NN",$departamento = 0, $ciudad = 0, $nivelEvento = 0, $usuario = 0){

        $this->nameEvento = $nameEvento;
        $this->departamento = $departamento;
        $this->ciudad = $ciudad;
        $this->nivelEvento = $nivelEvento;
        $this->usuario = $usuario;
        
    }

    public function validarDatos(){

    }

    public function registrarEvento(){

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL crearEvento(?,?,?,?)");
        $registrar->bindParam(1, $this->nameEvento, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->ciudad, PDO::PARAM_INT);
        $registrar->bindParam(3, $this->nivelEvento, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->usuario, PDO::PARAM_INT);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

            echo json_encode("Registro Exitoso");
    
        }
    
        else {
    
            echo json_encode("Error al registrar evento");
    
        }

    }

    public function validarPost(){

        if(isset($_POST) && !empty($_POST) && isset($_POST['floating_evento']) 
        && !empty($_POST['floating_evento'])){

            $evento = new CrearEvento(
                $_POST['floating_evento'],
                $_POST['departamento'],
                $_POST['ciudad'],
                $_POST['nivel-evento'],
                $_SESSION['idUser']
            );

            $evento->registrarEvento();
            // echo json_encode($_POST);
        }else{
            echo json_encode("adios");
        }

    }

}