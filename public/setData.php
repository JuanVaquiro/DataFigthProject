<?php

session_start();

require_once __DIR__ . "./../vendor/autoload.php";

use App\usuario\CargarDatosForm;

// $estado = 1;

$evento = new CargarDatosForm();

$evento = $evento->validarSesion();

$evento->validarPost();