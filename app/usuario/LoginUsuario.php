<?php

use config\Conexion;

class LoginUsuario{

    private $email;
    private $password;

    public function __construct($email, $password){
        
        $this->email = $email;
        $this->password = $password;
        
    }

    public function login(){

        require_once __DIR__ . "./../../config/Conexion.php";

        $pdo = new Conexion();
        $con = $pdo->conexion();

        $login = $con->prepare("CALL userLogin(?,?)");
        $login->bindParam(1, $this->email, PDO::PARAM_STR);
        $login->bindParam(2, $this->password, PDO::PARAM_STR);
        $login->execute();

        $registros = $login->fetchAll();

        if(count($registros) > 0){
                session_start();
                // echo json_encode($registros);
                // header("Location: ./../../public/control1.php");
                // $idUser = $registros[0]['id'];
                $_SESSION['idUser'] = $registros[0]['id'];
                $_SESSION['email'] = $registros[0]['email'];
                // echo json_encode($_SESSION['idUser']);
                echo json_encode("./home.php");
        }else{
            echo json_encode("Usuario o Contraseña Incorrectos");
        }

        // echo json_encode($login->fetchAll());

    }

    public function logOut(){

        session_start();

        session_destroy();

        echo json_encode('./');

    }

}

if( $_POST && isset($_POST['email-login']) && isset($_POST['pass-login']) ){

    // $response = $_POST['email-login']." ".$_POST['pass-login'];

    // echo json_encode($response);
    $login = new LoginUsuario(
      $_POST['email-login'],
      $_POST['pass-login']
    );

    $login->login();

}

elseif($_POST && isset($_POST['confirmacion'])){

    $login = new LoginUsuario(null, null);

    $login->logOut();

}