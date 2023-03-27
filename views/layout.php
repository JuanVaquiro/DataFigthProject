<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Http\Controllers\LayoutController;

$obj = new LayoutController();

$obj->setTitulo();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataFigth <?= ucfirst($obj->getTitulo()) ?> </title>
    <link rel="icon" href="<?= $obj->obtenerUrl($obj->getTitulo()) ?>dist/img/analytics.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= $obj->obtenerUrl($obj->getTitulo()) ?>dist/output.css">
</head>
<body>

    <?php require_once __DIR__ . "/../views//{$obj->setBody($obj->getTitulo())}" ?>

    <link rel="stylesheet" href="<?= $obj->obtenerUrl($obj->getTitulo()) ?>src/css/sweetAlert/sweetAlert2.css">
    <script src="<?= $obj->obtenerUrl($obj->getTitulo()) ?>src/js/sweetAlert/sweerAlert2.js"></script>
    <script src="./../../src/js/darkMode/index.js"></script>
</body>
</html>