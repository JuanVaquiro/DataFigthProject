<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearEvento;

$evento = new CrearEvento();

$evento->validarPost();