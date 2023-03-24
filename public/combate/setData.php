<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CargarDatosForm;

$estado = 1;

$evento = new CargarDatosForm($estado, $_SESSION['idUser']);

$evento->getData();