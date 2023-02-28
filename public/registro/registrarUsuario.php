<?php

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\RegistroUsuario;

$registro = new RegistroUsuario();

$registro->validarPost();