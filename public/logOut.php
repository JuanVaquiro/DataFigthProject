<?php

session_start();

require_once __DIR__ . "./../vendor/autoload.php";

use App\usuario\LoginUsuario;

$login = new LoginUsuario(null, null);

$login->validarPostLogOut();
$login->logOut();