<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearCombate;

$combate = new CrearCombate();

$combate->validarPost();