<<?php
    require_once __DIR__ . '/config.php';
    require_once __DIR__ . '/clase_sql.php';

    $clasesql = new Clase_sql();

    $codi = $_POST['txtCodi'];
    $desc = $_POST['txtDes'];
    

    $insertarcat = $clasesql->InsertarCategoria($codi, $desc);
    header('Location: categorias.php')
    ?>