<?php
    require_once __DIR__ . '/config.php';
    require_once __DIR__ . '/clase_sql.php';

    $clasesql = new Clase_sql();

    $cedu = $_POST['txtCedu'];
    $apel = $_POST['txtApe'];
    $nom = $_POST['txtNom'];
    $dire = $_POST['txtDire'];
    $telef = $_POST['txtTelef'];

    $insertarcli = $clasesql->InsertarCliente($cedu, $nomb, $apel, $dire, $telef);
    header('Location: clientes.php')
    ?>