<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearEvento;

$evento = new CrearEvento();

$evento->validarPost();

$evento = new CrearEvento(
    $_POST['floating_evento'],
    $_POST['ciudad'],
    $_POST['nivel-evento'],
    $_SESSION['idUser']
);

$evento->validarDatos();

$evento->registrarEvento();