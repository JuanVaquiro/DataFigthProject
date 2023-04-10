<?php

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\RegistroUsuario;

$registro = new RegistroUsuario(
    $_POST['name'],
    $_POST['last-name'],
    $_POST['type_document'],
    $_POST['document'],
    $_POST['email'],
    $_POST['telefono'],
    $_POST['date'],
    $_POST['password'],
    $_POST['confirm-password']
);

$registro->validarPost();
$registro->validarDatos();
$registro->registrar();