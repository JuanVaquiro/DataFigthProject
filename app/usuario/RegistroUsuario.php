<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use config\Conexion;

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

    public function __construct($nombres, $apellidos, $tipo_documento, $documento, $email, 
    $telefono, $fecha_nacimiento, $password, $confirm_password){

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

    public function validarDatos(){

        if( trim($this->nombres) && trim($this->apellidos) && trim($this->tipo_documento) && trim($this->documento) && 
        trim($this->email) && trim($this->telefono) && trim($this->fecha_nacimiento) && trim($this->password) && trim($this->confirm_password) ){

            $pattern1 = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]{3,50}$/";
            // preg_match($pattern, trim($text));

            if(preg_match($pattern1, trim($this->nombres))){

                if(preg_match($pattern1, trim($this->apellidos))){

                    $pattern1 = "/^[0-9]{1,1}$/";

                    if(preg_match($pattern1, trim($this->tipo_documento))){

                        $pattern1 = "/^[a-zA-Z0-9]{5,30}$/";

                        if(preg_match($pattern1, trim($this->documento))){

                            $pattern1 = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";
                                
                            if(preg_match($pattern1, trim($this->email))){

                                $pattern1 = "/^[0-9]{6,20}$/";

                                if(preg_match($pattern1, trim($this->telefono))){

                                    $pattern1 = "/^[0-9\\-]{10,10}$/";

                                    if(preg_match($pattern1, trim($this->fecha_nacimiento))){

                                        $pattern1 = "/^[0-9a-zA-ZñÑ\\@.-_*]{10,100}$/";
                                        
                                        if(preg_match($pattern1, trim($this->password))){

                                            if(preg_match($pattern1, trim($this->confirm_password))){

                                                
                                                if($this->password === $this->confirm_password){

                                                    return true;

                                                    // echo json_encode("Todo Correcto");
                    
                                                }else{
                            
                                                    echo json_encode("Las Contraseñas No Coinciden");
                                                }
                    
                                            }else{
                        
                                                echo json_encode("Contraseña de confirmacion invalida");
                                            }
            
                                        }else{
                    
                                            echo json_encode("Contraseña invalida");
                                        }
        
                                    }else{
                
                                        echo json_encode("Fecha De Nacimiento invalida");
                                    }
    
                                }else{
            
                                    echo json_encode("Telefono Invalido");
                                }

                            }else{
        
                                echo json_encode("Email Invalido");
                            }
                            
                        }else{
    
                            echo json_encode("Documento Invalido");
                        }

                    }else{

                        echo json_encode("Tipo De Documento Invalido");
                    }

                }else{

                    echo json_encode("Apellido invalido");
                }

            }else{

                echo json_encode("Nombre invalido");

            }

            // if( $this->getLongitud($this->nombres) >= 3 && $this->getLongitud($this->nombres) <= 50 && !is_numeric($this->nombres) ){

            // }

            // echo json_encode("hola");

        }
        else{
            echo json_encode("Complete todos los campos");
        }

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

        if ($registrar) {

            echo json_encode("Registro Exitoso");
    
        }
    
        else {
    
            echo json_encode("Error Al Registrar");
    
        }

    }

    // public function getLongitud($valor){

    //     return count(str_split($valor));
    // }

    // public function obtenerDatos(){
    //     echo json_encode($this->nombres);
    // }

}

if( $_POST && isset($_POST['name']) && isset($_POST['last-name']) ){

    $user = new RegistroUsuario(
        $_POST['name'], 
        $_POST['last-name'], 
        $_POST['type_document'], 
        $_POST['document'], 
        $_POST['email'], 
        $_POST['telefono'], 
        $_POST['date'], 
        $_POST['password'],
        $_POST['confirm-password']
    );
    
    if($user->validarDatos()){
    
        $user->registrar();
    
    }

}



