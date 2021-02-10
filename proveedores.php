
<?php
    //Inicio de Sesión
    session_start();
    $usu =  $_SESSION['usuario'];
    if(!isset($usu)){
        header('Location: index.php');
    }


?>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-left">
              <div class="form-group">

              </div>
              <div class="caption">    
        </p>
      </div>

            </form>
            <ul class="nav navbar-nav navbar-right" >

              <li class="dropdown" >
                <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h5> OPCIONES</h5> <span class=""></span></a>
                <ul class="dropdown-menu" >
                  <li><a href="#"><h5>Cuenta</h5></a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><h5>Configuracion</h5></a>
                  </li>
                  <li class="nav-item">

                  <li  class="divider"></li>
                  <a class="nav-link" href="index.php"><br><h5>Cerrar sesion</h5></a>
                  </li>
                  <li class="nav-item">

                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </div>
  </div>
</div>
<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/clase_sql.php';
$clasesql = new Clase_sql();
$resultadoProveedor = $clasesql->ConsultaProveedores();

?>
<html>
<head>
    <meta charset="utf-8">
<title>Proveedores</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
    <body>
    <div class="container">
        <hr>
        <h3> Proveedores </h3>
        <hr>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Nuevo Proveedor
</button>
<hr>
<hr>
        <div>
          <table class="table table-striped table-hover" id="DtableProveedores">
            <thead>
                <tr>
                    <th> Cédula </th>
                    <th> Apellidos  y   Nombres </th>
                  
                    <th> Direccion </th>
                    <th> Telefono </th>
                </tr>
            </thead>
            <tbody>
                    <?php while ($fila = $resultadoProveedor->fetch_assoc()) {?>

                       <tr>
                       <td> <?php echo $fila['cedula'] ?> </td>
                        <td> <?php echo $fila['apellidos'] . ' ' . $fila['nombres'] ?> </td>
                        <td> <?php echo $fila['direccion'] ?> </td>
                        <td> <?php echo $fila['telefono'] ?> </td>
                    </tr>
                    <?php }?>
                    </tbody> 
          </table>
        </div>
    </div>
               <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="guardarproveedores.php" name="form1" method="POST" class="needs-validation" novalidate>
      <div class="modal-body">    
                      <div class="form-group row">
                        <label for="" class="col-sm-2"> CEDULA: </label>
                        <div class="col-sm-3">                     
                        <input type="text" name="txtCedu" id="txtCedu" class="form-control" placeholder="Ingrese Cedula" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2  ">APELLIDOS Y NOMBRES: </label>
                        <div class="col-sm-6">
                         <input type="text" name="txtApe" id="txtApe" class="form-control" placeholder="Ingrese Apellidos y Nombres" required>        
                                           
                         </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2"> DIRECCION: </label>
                      <div class="col-sm-4">
                        <input type="text" name="txtDire" id="txtDire" class="form-control" placeholder="Ingrese Direccion" required>
                      </div>     
                      
                        <label for="" class="col-sm-2"> TELEFONO: </label>
                      <div class="col-sm-3">
                        <input type="text" name="txtTelef" id="txtTelef" class="form-control" placeholder="Ingrese Telefono" required>
                      </div>
                      </div>       ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
            </tbody>
          </table>
        </div>
    </div>

    </body>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>
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
<script>
$(document).ready(function(){
  $('#DtableProveedores').DataTable();
});

</script>

<div class="container">
      <hr>
        <h2>  </h2>
        <hr>
        <button type="button" class="btn btn-danger" data-toggle="modal">
        <a class="btn btn-danger" href="reportes/proveedorespdf.php"><h6>Reporte Pdf</h6></a>
    
</button>
<hr>
<hr>
<?php