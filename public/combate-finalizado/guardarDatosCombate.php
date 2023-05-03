<?php

require_once __DIR__ . "./../../vendor/autoload.php";

session_start();

use App\usuario\CrearCombate;

$combate = new CrearCombate();

$combate->actualizarDatosCombate($_POST['comentario']);