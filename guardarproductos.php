<<?php
    require_once __DIR__ . '/config.php';
    require_once __DIR__ . '/clase_sql.php';

    $clasesql = new Clase_sql();

    $codi = $_POST['txtCodi'];
    $desc = $_POST['txtDes'];
    $pvpc = $_POST['txtCom'];
    $pvpv = $_POST['txtVen'];
    $cant = $_POST['txtCanti'];
    $obs = $_POST['txtObs'];


    $insertarpr = $clasesql->InsertarProductos($codi, $desc, $pvpc, $pvpv, $cant, $obs, $codcat);
    header('Location: productos.php')
    ?>