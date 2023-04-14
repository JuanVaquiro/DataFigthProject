<?php

namespace app\usuario;

use config\Conexion;
use PDO;
use Exception;

class CrearDeportista{

    private $ciudad;
    // private $departamento;
    // private $pais;
    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $documento;
    private $sexo;
    private $email;
    private $telefono;
    private $fechaNacimiento;
    private $usuario;
    private $deporte;

    public function __construct($ciudad = null, $nombre = null, $apellido = null, $tipoDocumento = null, $documento = null, 
    $sexo = null, $email = null, $telefono = null, $fechaNacimiento = null, $usuario = null, $deporte = null){

        $this->ciudad = $ciudad;
        // $this->departamento = $departamento;
        // $this->pais = $pais;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDocumento = $tipoDocumento;
        $this->documento = $documento;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->usuario = $usuario;
        $this->deporte = $deporte;
        
    }

    public function validarDatos(){

        try {

            if( !trim($this->nombre) || !trim($this->apellido) || !trim($this->tipoDocumento) || !trim($this->documento) || 
            !trim($this->email) || !trim($this->telefono) || !trim($this->fechaNacimiento) || !trim($this->sexo) || !trim($this->ciudad)
            || !trim($this->deporte)){
                
                throw new Exception("Complete los campos");
    
            }

            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]{3,50}$/";

            if( !preg_match($pattern, trim($this->nombre)) ){

                throw new Exception("Los nombres deben de contener minimo 3 y maximo 50 caracteres, no se permiten numeros o caracteres especiales");

            }

            if( !preg_match($pattern, trim($this->apellido)) ){

                throw new Exception("Los apellidos deben de contener minimo 3 y maximo 50 caracteres, no se permiten numeros o caracteres especiales");

            }

            $pattern = "/^[0-9]{1,1}$/";

            if( !preg_match($pattern, trim($this->tipoDocumento)) || (!$this->tipoDocumento >= 1 && !$this->tipoDocumento <= 9) ){

                throw new Exception("Tipo de documento no valido");

            }

            $pattern = "/^[a-zA-Z0-9]{6,30}$/";

            if( !preg_match($pattern, trim($this->documento)) ){

                throw new Exception("Los numeros de documento deben tener minimo 6 caracteres");

            }

            if( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ){

                throw new Exception("Este correo no es valido");

            }

            $pattern = "/^[0-9]{6,10}$/";

            if( !preg_match($pattern, trim($this->telefono)) ){

                throw new Exception("El teléfono contiene caracteres no numéricos o tiene menos de 6 caracteres");

            }

            $timeStamp = strtotime($this->fechaNacimiento);

            if(!$timeStamp){
                throw new Exception("La fecha no es valida");
            }

            $fecha_convertida = date('Y-m-d', $timeStamp);

            if($fecha_convertida != $this->fechaNacimiento){

                throw new Exception("La fecha no es valida");

            }

            $pattern = "/^[0-9]{1,3}$/";

            
            if( !preg_match($pattern, trim($this->ciudad)) || (!$this->ciudad >= 1 && !$this->ciudad <= 5) ){

                throw new Exception("La ciudad seleccionada no es valida");

            }

            $pattern = "/^[0-9]{1,1}$/";

            if( !preg_match($pattern, trim($this->sexo)) && (!$this->sexo >= 1 && !$this->sexo <= 9) ){

                throw new Exception("El sexo seleccionado no es valido");

            }



        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function registrarDeportista(){

        // require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();
        
        $registrar = $con->prepare("CALL insertDeportista(?,?,?,?,?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->ciudad, PDO::PARAM_INT);
        $registrar->bindParam(2, $this->nombre, PDO::PARAM_STR);
        $registrar->bindParam(3, $this->apellido, PDO::PARAM_STR);
        $registrar->bindParam(4, $this->tipoDocumento, PDO::PARAM_INT);
        $registrar->bindParam(5, $this->documento, PDO::PARAM_STR);
        $registrar->bindParam(6, $this->sexo, PDO::PARAM_INT);
        $registrar->bindParam(7, $this->email, PDO::PARAM_STR);
        $registrar->bindParam(8, $this->telefono, PDO::PARAM_STR);
        $registrar->bindParam(9, $this->fechaNacimiento, PDO::PARAM_STR);
        $registrar->bindParam(10, $this->usuario, PDO::PARAM_INT);
        $registrar->bindParam(11, $this->deporte, PDO::PARAM_INT);
        $registrar->execute();
        
        if ($registrar && $registrar->rowCount()) {
        
            echo json_encode("Registro Exitoso");
            
        }
            
        else {
            
            echo json_encode("Error Al Registrar");
            
        }

    }

    public function validarPost(){

        try {

            if(!$_POST){
                
                header("Location: ./../");

            }

            if( !isset($_POST['floating_name']) ){

                throw new Exception("El campo nombre no se ha enviado");

            }

            if( !isset($_POST['floating_last-name']) ){

                throw new Exception("El campo apellido no se ha enviado");

            }

            if( !isset($_POST['floating_phone']) ){

                throw new Exception("El campo tipo de telefono no se ha enviado");

            }

            if( !isset($_POST['floating_email']) ){

                throw new Exception("El campo e-mail no se ha enviado");

            }

            if( !isset($_POST['tipo-documento']) ){

                throw new Exception("El campo tipo de tipo de documento no se ha enviado");

            }

            if( !isset($_POST['floating_doc']) ){

                throw new Exception("El campo documento no se ha enviado");

            }

            if( !isset($_POST['floating_fecha_Nacimiento']) ){

                throw new Exception("El campo fecha de nacimiento no se ha enviado");

            }

            if( !isset($_POST['deporte']) ){

                throw new Exception("El campo deporte no se ha enviado");

            }

            if( !isset($_POST['pais']) ){

                throw new Exception("El campo pais no se ha enviado");

            }


            if( !isset($_POST['departamento']) ){

                throw new Exception("El campo departamento no se ha enviado");

            }

            if( !isset($_POST['ciudad']) ){

                throw new Exception("El campo ciudad no se ha enviado");

            }

            
            if( !isset($_POST['sexo']) ){

                throw new Exception("El campo sexo no se ha enviado");

            }



        } catch (Exception $e) {

            echo json_encode($e->getMessage());
            die;

        }

    }

}