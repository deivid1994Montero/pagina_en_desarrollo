<?php
define('HOST','localhost');
define('USER','user_david');
define('PASS','12345678');
define('DB','compras_ventas');

$con = mysqli_connect(HOST, USER, PASS, DB) or die('Error de conexion');

?>
