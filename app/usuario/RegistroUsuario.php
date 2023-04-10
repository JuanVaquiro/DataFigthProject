<?php

// require_once __DIR__ . "/../../vendor/autoload.php";

namespace app\usuario;

use config\Conexion;
use PDO;
use Exception;

class RegistroUsuario{

    private $nombres;
    private $apellidos;
    // private $id_ciudad;
    private $tipo_documento;
    private $documento;
    private $email;
    private $telefono;
    private $fecha_nacimiento;
    private $password;
    private $confirm_password;

    public function __construct($nombres = null, $apellidos = null, $tipo_documento = null, $documento = null, $email = null, 
    $telefono = null, $fecha_nacimiento = null, $password = null, $confirm_password = null){

        // if($_POST && !empty($_POST)){

            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            // $this->id_ciudad = $_POST[''];
            $this->tipo_documento = $tipo_documento;
            $this->documento = $documento;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->fecha_nacimiento = $fecha_nacimiento;
            $this->password = $password;
            $this->confirm_password = $confirm_password;

        // }

        // echo json_encode($this->nombres);
        
    }

    // public function validarDatos(){

    //     if( trim($this->nombres) && trim($this->apellidos) && trim($this->tipo_documento) && trim($this->documento) && 
    //     trim($this->email) && trim($this->telefono) && trim($this->fecha_nacimiento) && trim($this->password) && trim($this->confirm_password) ){

    //         $pattern1 = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]{3,50}$/";
    //         // preg_match($pattern, trim($text));

    //         if(preg_match($pattern1, trim($this->nombres))){

    //             if(preg_match($pattern1, trim($this->apellidos))){

    //                 $pattern1 = "/^[0-9]{1,1}$/";

    //                 if(preg_match($pattern1, trim($this->tipo_documento))){

    //                     $pattern1 = "/^[a-zA-Z0-9]{5,30}$/";

    //                     if(preg_match($pattern1, trim($this->documento))){

    //                         $pattern1 = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";
                                
    //                         if(preg_match($pattern1, trim($this->email))){

    //                             $pattern1 = "/^[0-9]{6,20}$/";

    //                             if(preg_match($pattern1, trim($this->telefono))){

    //                                 $pattern1 = "/^[0-9\\-]{10,10}$/";

    //                                 if(preg_match($pattern1, trim($this->fecha_nacimiento))){

    //                                     $pattern1 = "/^[0-9a-zA-ZñÑ\\@.-_*]{10,100}$/";
                                        
    //                                     if(preg_match($pattern1, trim($this->password))){

    //                                         if(preg_match($pattern1, trim($this->confirm_password))){

                                                
    //                                             if($this->password === $this->confirm_password){

    //                                                 return true;

    //                                                 // echo json_encode("Todo Correcto");
                    
    //                                             }else{
                            
    //                                                 echo json_encode("Las Contraseñas No Coinciden");
    //                                             }
                    
    //                                         }else{
                        
    //                                             echo json_encode("Contraseña de confirmacion invalida");
    //                                         }
            
    //                                     }else{
                    
    //                                         echo json_encode("Contraseña invalida");
    //                                     }
        
    //                                 }else{
                
    //                                     echo json_encode("Fecha De Nacimiento invalida");
    //                                 }
    
    //                             }else{
            
    //                                 echo json_encode("Telefono Invalido");
    //                             }

    //                         }else{
        
    //                             echo json_encode("Email Invalido");
    //                         }
                            
    //                     }else{
    
    //                         echo json_encode("Documento Invalido");
    //                     }

    //                 }else{

    //                     echo json_encode("Tipo De Documento Invalido");
    //                 }

    //             }else{

    //                 echo json_encode("Apellido invalido");
    //             }

    //         }else{

    //             echo json_encode("Nombre invalido");

    //         }

    //         // if( $this->getLongitud($this->nombres) >= 3 && $this->getLongitud($this->nombres) <= 50 && !is_numeric($this->nombres) ){

    //         // }

    //         // echo json_encode("hola");

    //     }
    //     else{
    //         echo json_encode("Complete todos los campos");
    //     }

    // }

    public function validarDatos(){

        try {

            if( !trim($this->nombres) || !trim($this->apellidos) || !trim($this->tipo_documento) || !trim($this->documento) || 
            !trim($this->email) || !trim($this->telefono) || !trim($this->fecha_nacimiento) || !trim($this->password) || !trim($this->confirm_password) ){
                
                throw new Exception("Complete los campos");
    
            }

            $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]{3,50}$/";

            if( !preg_match($pattern, trim($this->nombres)) ){

                throw new Exception("Los nombres deben de contener minimo 3 y maximo 50 caracteres, no se permiten numeros o caracteres especiales");

            }

            if( !preg_match($pattern, trim($this->apellidos)) ){

                throw new Exception("Los apellidos deben de contener minimo 3 y maximo 50 caracteres, no se permiten numeros o caracteres especiales");

            }

            $pattern = "/^[0-9]{1,1}$/";

            if( !preg_match($pattern, trim($this->tipo_documento)) ){

                throw new Exception("Detectamos cambios en el codigo");

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

                throw new Exception("El teléfono contiene caracteres no numéricos");

            }

            $timeStamp = strtotime($this->fecha_nacimiento);

            if(!$timeStamp){
                throw new Exception("La fecha no es valida");
            }

            $fecha_convertida = date('Y-m-d', $timeStamp);

            if($fecha_convertida != $this->fecha_nacimiento){

                throw new Exception("La fecha no es valida");

            }

            $arrayFecha = explode('-', $_POST['date']);
            $year = $arrayFecha[0];
            $mes = $arrayFecha[1];
            $dia = $arrayFecha[2];

            if( !$this->validarEdad($year, $mes, $dia) ){

                throw new Exception("Usted no es mayor de edad");

            }

            $pattern = "/^[0-9a-zA-ZñÑ@.-_*]{10,100}$/";

            if( !preg_match($pattern, trim($this->password)) ){

                throw new Exception("La contraseña solo puede contener:<br>
                                        » Digitos del 0 al 9.<br>
                                        » Letras minusculas y mayusculas del alfabeto incluyendo la (ñ).<br>
                                        » Caracteres como: el símbolo arroba (@), el punto (.), el guion (-), el asterisco (*) y la barra baja (_).<br>
                                        » Un Maximo de 3 caracteres.<br>
                                        » *Es obligatorio que contenga un minimo de 10 caracteres.<br>
                                        ");

            }

            if( $this->password != $this->confirm_password ){

                throw new Exception("Las contraseñas no coinciden");

            }


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    // public function obtenerZonaHoraria(){

    //     $ip_address = $_SERVER['REMOTE_ADDR']; // Obtener la dirección IP del usuario

    //     // Realizar una solicitud HTTP a la API de ipapi y obtener la ubicación del usuario
    //     $url = "https://ipapi.co/$ip_address/json/";
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     curl_close($ch);
    //     $data = json_decode($response, true);

    //     // Obtener la zona horaria correspondiente a la ubicación del usuario
    //     $timezone = $data['city'];

    //     return $data;

    // }

    public function validarEdad($year, $mes, $dia){

        // date_default_timezone_set();

        $fechaActual = date("Y-m-d");

        $arrayFechaActual = explode('-', $fechaActual);

        $yearActual = $arrayFechaActual[0];
        $mesActual = $arrayFechaActual[1];
        $diaActual = $arrayFechaActual[2];

        if( ($yearActual - $year) == 18 ){

            if($mesActual == $mes && $diaActual >= $dia){
                return true;
            }else{
                return false;
            }

        }elseif( ($yearActual - $year) > 18 ){

            return true;

        }else{

            return false;

        }

        // echo json_encode($diaActual);

    }

    public function registrar(){

        // require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $registrar = $con->prepare("CALL insertUsuario(?,?,?,?,?,?,?,?)");
        $registrar->bindParam(1, $this->nombres, PDO::PARAM_STR);
        $registrar->bindParam(2, $this->apellidos, PDO::PARAM_STR);
        $registrar->bindParam(3, $this->tipo_documento, PDO::PARAM_INT);
        $registrar->bindParam(4, $this->documento, PDO::PARAM_STR);
        $registrar->bindParam(5, $this->email, PDO::PARAM_STR);
        $registrar->bindParam(6, $this->telefono, PDO::PARAM_STR);
        $registrar->bindParam(7, $this->fecha_nacimiento, PDO::PARAM_STR);
        $registrar->bindParam(8, $this->password, PDO::PARAM_STR);
        $registrar->execute();

        if ($registrar && $registrar->rowCount() > 0) {

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

            if( !isset($_POST['name']) ){

                throw new Exception("El campo nombre no se ha enviado");

            }

            if( !isset($_POST['last-name']) ){

                throw new Exception("El campo apellido no se ha enviado");

            }

            if( !isset($_POST['type_document']) ){

                throw new Exception("El campo tipo de documento no se ha enviado");

            }

            if( !isset($_POST['document']) ){

                throw new Exception("El campo documento no se ha enviado");

            }

            if( !isset($_POST['email']) ){

                throw new Exception("El campo e-mail no se ha enviado");

            }

            if( !isset($_POST['telefono']) ){

                throw new Exception("El campo telefono no se ha enviado");

            }

            if( !isset($_POST['date']) ){

                throw new Exception("El campo fecha de nacimiento no se ha enviado");

            }

            if( !isset($_POST['password']) ){

                throw new Exception("El campo contraseña no se ha enviado");

            }

            if( !isset($_POST['confirm-password']) ){

                throw new Exception("El campo confirmar contraseña no se ha enviado");

            }

        } catch (Exception $e) {

            echo json_encode($e->getMessage());
            die;

        }

    }

}



