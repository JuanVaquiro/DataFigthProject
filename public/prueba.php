<?php

require_once("./../vendor/autoload.php");

use App\usuario\CrearCombate;

// require_once __DIR__ . "/../views/layout.php";
    $crear = new CrearCombate(1, 1);
    $crear->validarDatos();