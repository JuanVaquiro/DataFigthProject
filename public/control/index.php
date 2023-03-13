<?php

// require_once __DIR__ . "./../../views/layout.php";

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

// require_once __DIR__ . "./../../views/layout.php";

// if(isset($_SESSION['idUser'])){
//     require_once __DIR__ . "/../views/layout.php";
// }
// else{
//     header("Location: ./");
// }

use App\usuario\LoginUsuario;

$login = new LoginUsuario(null, null);

$login->validarLogin();

echo $_GET['combate'];

echo $_GET['deportista'];

$_SESSION['combate'] = $_GET['combate'];
$_SESSION['deportista'] = $_GET['deportista'];
// $_SESSION['idDeportista'] = $_GET['idDeportista'];

// echo "<pre>";

// print_r($_SESSION['ultimoCombate']);

// echo "</pre>";