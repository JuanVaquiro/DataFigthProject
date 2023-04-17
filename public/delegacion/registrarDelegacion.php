<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearDelegacion;

$delegacion = new CrearDelegacion();

$delegacion->validarPost();

$delegacion = new CrearDelegacion(
    $_POST['floating_delegacion'],
    $_POST['floating_description'],
    $_POST['ciudad'],
    $_SESSION['idUser'],
    $_POST['floating_siglas'],
    $_POST['deporte']
);

$delegacion->validarDatos();

$delegacion->registrarDelegacion();