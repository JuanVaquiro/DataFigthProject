<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearArbitro;

$arbitro = new CrearArbitro();

$arbitro->validarPost();

$arbitro = new CrearArbitro(
    $_POST['arbitro-name'],
    $_POST['arbitro-last-name'],
    $_POST['arbitro-tipo-documento'],
    $_POST['arbitro_doc'],
    $_POST['sexo_arbitro'],
    $_POST['arbitro_phone'],
    $_POST['arbitro_email'],
    $_POST['arbitro_fecha_Nacimiento'],
    $_POST['deporte_arbitro'],
    $_POST['categoria_arbitro'],
    $_SESSION['idUser']
);

$arbitro->validarDatos();

$arbitro->registrarArbitro();