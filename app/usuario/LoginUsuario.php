<?php

namespace app\usuario;

use config\Conexion;
use PDO;
use Exception;

class LoginUsuario{

    private $email;
    private $password;

    public function __construct($email, $password){
        
        $this->email = $email;
        $this->password = $password;
        
    }

    public function login(){

        // require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $login = $con->prepare("CALL userLogin(?,?)");
        $login->bindParam(1, $this->email, PDO::PARAM_STR);
        $login->bindParam(2, $this->password, PDO::PARAM_STR);
        $login->execute();

        $registros = $login->fetchAll();

        if(count($registros) > 0){
                // session_start();
                // echo json_encode($registros);
                // header("Location: ./../../public/control1.php");
                // $idUser = $registros[0]['id'];
                $_SESSION['idUser'] = $registros[0]['id'];
                $_SESSION['email'] = $registros[0]['email'];
                $_SESSION['ultimoAtaque'] = 0;
                $_SESSION['combate'] = 0;
                // $_SESSION['deportista'] = 0;
                $_SESSION['idDeportista'] = 0;
                // echo json_encode($_SESSION['idUser']);
                echo json_encode("./home");
        }else{
            echo json_encode("Usuario o Contraseña Incorrectos");
        }

        // echo json_encode($login->fetchAll());

    }

    public function logOut(){

        // session_start();

        session_destroy();

        echo json_encode('./../');

    }

    public function validarDatos(){

        try {


            if( !trim($this->email) || !trim($this->password) ){

                throw new Exception("Complete los campos");

            }

            if( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ){

                throw new Exception("Porfavor ingrese una direccion de correo valida");

            }

            $pattern = "/^[0-9a-zA-ZñÑ\\@.-_*]{1,100}$/";

            if(!preg_match($pattern, trim($this->password))){

                throw new Exception("Porfavor ingrese una contraseña valida");

            }

            // echo "hola";


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function validarPostLogin(){

        try {


            if( !$_POST ){

                header("Location: ./");

            }

            if( !isset($_POST['email-login']) ){

                throw new Exception("No se ha enviado la direccion de correo");

            }

            if( !isset($_POST['email-login']) ){

                throw new Exception("No se ha enviado la contraseña");

            }


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function validarPostLogOut(){

        try {

            if(!$_POST){

                header("Location: ./");
    
            }
    
            if( !isset($_POST['confirmacion']) ){
    
                throw new Exception("windon.location");
    
            }


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function validarLogin(){

        if( isset($_SESSION['idUser']) ){
                require_once("./../../views/layout.php");
        }
        else{
            header("Location: ./../");
        }
    }

    public function validarLogOutIndex(){

        if( !isset($_SESSION['idUser']) ){
            require_once("./../views/layout.php");
        }
        else{
            header("Location: ./home");
        }

    }

    public function validarLogOut(){

        if( !isset($_SESSION['idUser']) ){
            require_once("./../../views/layout.php");
        }
        else{
            header("Location: ./../home");
        }

    }

}