<?php

require_once __DIR__ . "./../../vendor/autoload.php";

use App\combate\RegistroAtaquesCombate;

$registro = new RegistroAtaquesCombate(
    $_POST['golpe'],
    $_POST['posicion'],
    $_POST['ubicacion'],
    $_POST['golpeo'],
    $_POST['punto'],
    $_POST['round'],
    $_POST['segundo']
);

$registro->obtenerSegundos();

$registro->registrarAtaque();