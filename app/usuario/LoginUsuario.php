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

            $pattern = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";

            if( !preg_match($pattern, trim($this->email)) ){

                throw new Exception("Dato no valido para email");

            }

            $pattern = "/^[0-9a-zA-ZñÑ\\@.-_*]{10,100}$/";

            if(!preg_match($pattern, trim($this->password))){

                throw new Exception("Dato no valido para contraseña");

            }

            // echo "hola";


        } catch (Exception $e) {
            echo json_encode($e->getMessage());
            die;
        }

    }

    public function validarpost(LoginUsuario $login){

        if($_POST && isset($_POST['confirmacion'])){

            // $login = new LoginUsuario(null, null);
        
            $login->logOut();
        
        }
        elseif( $_POST && isset($_POST['email-login']) && isset($_POST['pass-login']) ){

            // $response = $_POST['email-login']." ".$_POST['pass-login'];

            // echo json_encode($response);

            $login->email = $_POST['email-login'];

            $login->password = $_POST['pass-login'];

            $login->validarDatos();

            $login->login();
            
        }
        else{
            header("Location: ./");
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