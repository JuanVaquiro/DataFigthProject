<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\verPerfil;

$evento = new verPerfil();

$evento->validarPost();