<?php

require_once __DIR__ . "./../../vendor/autoload.php";

use App\combate\AccionControl;

$registro = new AccionControl();

$registro->validarPost();