<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CargarDatosForm;

$evento = new CargarDatosForm(1, $_SESSION['idUser']);

$evento->getDeportistasActivos();