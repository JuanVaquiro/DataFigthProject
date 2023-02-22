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
    <title>DataFigth <?= $obj->getTitulo() ?> </title>
    <link rel="icon" href="/DataFight/dist/img/analytics.png" type="image/x-icon">
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>

    <?php require_once __DIR__ . "/../views//{$obj->setBody($obj->getTitulo())}" ?>

    <link rel="stylesheet" href="./../src/css/sweetAlert/sweetAlert2.css">
    <script src="./../src/js/sweetAlert/sweerAlert2.js"></script>
</body>
</html>