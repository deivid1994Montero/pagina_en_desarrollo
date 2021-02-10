
<?php
    //Inicio de Sesión

    session_start();
    if(isset($_SESSION['usuario_abc'])){
        header('Location: menu.php');
    }

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/clase_sql.php';
$clasesql = new Clase_sql();


?>
<html>
<head>
    <meta charset="utf-8">  
    <title> Acceso al sistema </title>
    <div align="center">
    
    <h3 >ACCESO AL SISTEMA</h3>
  
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>
    <body>
    <div class="container">
       
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 ml-auto mr-auto mt-4">
        <div class="col-12 border border-warning shadow">
        <div class="text-center">
     
        </div>

        <form action="" method="POST" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="txtusu1"> Usuario: </label>
            <input type="text" name="txtusu" id="txtusu1" class="form-control form-control-lg" required>
          

          </div>

          <div class="form-group">
            <label for="txtusu1"> Password: </label>
            <input type="password" name="txtpass" id="txtpass1" class="form-control form-control-lg" required>

          </div>
          <div class="form-group">
        <input type="submit" value="Ingresar" class="btn btn-primary btn-block">
        
  </form> 
        </div>
        </div>
    </div>
    </body>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>



</li>
</html>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<?php 
    if($_POST){
      $usu = $_POST['txtusu'];
      $pas = $_POST['txtpass'];
       $resultadoUsuario = $clasesql->ConsultaUsuario($usu, $pas);
       //echo "Septimo". $resultadoCliente->num_rows>0; exit; 
       if($resultadoUsuario->num_rows>0){
         session_start ();
         $_SESSION['usuario']=$usu;
         header ('Location:menu.php');
       }else{ ?>
         <script>
         Swal.fire({
           icon: 'error',
           title: 'Acceso',
           text: 'Clave/usuario inconrrecto'
           
         })
          </script>
      <?php }
    }
?>


