<?php

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

use App\usuario\CrearDeportista;

$registro = new CrearDeportista();

$registro->validarPost();

$registro = new CrearDeportista(
        $_POST['ciudad'], 
        $_POST['floating_name'], 
        $_POST['floating_last-name'], 
        $_POST['tipo-documento'], 
        $_POST['floating_doc'], 
        $_POST['sexo'], 
        $_POST['floating_email'], 
        $_POST['floating_phone'],
        $_POST['floating_fecha_Nacimiento'],
        $_SESSION['idUser'],
        $_POST['deporte']
);
$registro->validarDatos();
$registro->registrarDeportista();