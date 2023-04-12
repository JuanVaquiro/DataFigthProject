<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearCombate;

$combate = new CrearCombate();

$combate->validarPost();

$combate = new CrearCombate(
    // $_POST['deporte-radio'],
    $_POST['deportista_1'],
    $_POST['delegacion_1'],
    $_POST['deportista_2'],
    $_POST['delegacion_2'],
    $_POST['evento'],
    $_POST['arbitro'],
    $_POST['datetime_local'],
    $_POST['duracion-round-radio'],
    $_POST['numero-round-radio'],
    $_POST['fase-ronda'],
    $_SESSION['idUser']
            );
$combate->validarDatos();
$combate->obtenerSegundos();
$combate->registrarCombate();