<?php

session_start();

require_once __DIR__ . "./../vendor/autoload.php";


// require_once __DIR__ . "/../views/layout.php";

// if(!isset($_SESSION['idUser'])){
    // require_once __DIR__ . "/../views/layout.php";
//     session_destroy();
// }
// else{
//     header("Location: ./home.php");
// }

use App\usuario\LoginUsuario;

$login = new LoginUsuario(null, null);

$login->validarLogOutIndex();