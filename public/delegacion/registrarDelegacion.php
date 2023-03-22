<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearDelegacion;

$registro = new CrearDelegacion();

$registro->validarPost();