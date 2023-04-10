<?php

session_start();

require_once __DIR__ . "./../vendor/autoload.php";

use App\usuario\LoginUsuario;

$login = new LoginUsuario($_POST['email-login'], $_POST['pass-login']);

$login->validarPostLogin();
$login->validarDatos();
$login->login();