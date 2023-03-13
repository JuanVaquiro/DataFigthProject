<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearDeportista;

$registro = new CrearDeportista();

$registro->validarPost();