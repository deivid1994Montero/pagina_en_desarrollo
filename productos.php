
<?php
   //Inicio de Sesión

   session_start();
   $usu =  $_SESSION['usuario'];
   if(!isset($usu)){
       header('Location: index.php');
   }

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/clase_sql.php';
$clasesql = new Clase_sql();
$resultadoProducto = $clasesql->ConsultaProductos();

?>
<html>
<head>
    <meta charset="utf-8">
<title>Productos</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
    <body>
    <div class="container">
      <hr>
        <h3> Productos </h3>
        <hr>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Nuevo Producto
</button>
<hr>
<hr>
        <div>
          <table class="table table-striped table-hover" id="DtableProductos">
            <thead>
                <tr>
                    <th> Codigo </th>
                    <th> Descripcion </th>
                    <th> pvp compra </th>
                    <th> pvp venta </th>
                    <th> cantidad </th>
                    <th> observacion </th>
                    <th> categoria </th>
                   
                    
                </tr>
            </thead>
            <tbody>
                    <?php while ($fila = $resultadoProducto->fetch_assoc()) {?>

                      <tr>
                       <td> <?php echo $fila['codigo'] ?> </td>
                        <td> <?php echo $fila['descripcion'] ?> </td> 
                        <td> <?php echo $fila['precioc'] ?></td> 
                        <td> <?php echo $fila['preciov'] ?></td>               
                        <td> <?php echo $fila['cantidad'] ?> </td>
                        <td> <?php echo $fila['observacion'] ?> </td>
                        <td> <?php echo $fila['codigo_cat'] ?> </td>
                        
                        
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
        <h5 class="modal-title" id="exampleModalLabel">Ingrese Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="guardarproductos.php" name="form1" method="POST" class="needs-validation" novalidate>
      <div class="modal-body">    
                     
      <div class="form-group row">
                        <label for="" class="col-sm-2"> CODIGO: </label>
                        <div class="col-sm-3">                     
                        <input type="text" name="txtCodi" id="txtCodi" class="form-control" placeholder="Ingrese Codigo" required>
                        <div class="invalid-feedback">Ingrese codigo.!</div>
                        </div>
                    
                        <label for="" class="col-sm-2  "> DESCRIPCION: </label>
                        <div class="col-sm-4">
                             <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Ingrese Descripcion" required>   
                             <div class="invalid-feedback">Ingrese.!</div>     
                      </div>     
                      </div>  
                      <div class="form-group row">          
                        <label for="" class="col-sm-2  "> PVP COMPRA: </label>
                        <div class="col-sm-3">                      
                        <input type="text" name="txtCom" id="txtCom" class="form-control" placeholder="Ingrese Compra" required>
                        <div class="invalid-feedback">Ingrese cédula.!</div>
                      </div>
                                           
                        <label for="" class="col-sm-2"> PVP VENTA: </label>
                      <div class="col-sm-3">
                        <input type="text" name="txtVen" id="txtVen" class="form-control" placeholder="Ingrese Venta" required>
                        <div class="invalid-feedback">Ingrese cédula.!</div>
                      </div>     
                      </div>       
                      <div class="form-group row">   
                        <label for="" class="col-sm-2"> CANTIDAD: </label>
                      <div class="col-sm-3">
                        <input type="text" name="txtCanti" id="txtCanti" class="form-control" placeholder="Cantidad" required>
                        <div class="invalid-feedback">Ingrese cédula.!</div>
                      </div>
                      
                        <label for="" class="col-sm-2">OBSERVACION: </label>
                      <div class="col-sm-5">
                        <input type="text" name="txtObs" id="txtObs" class="form-control" placeholder="Ingrese Observacion" required>
                        <div class="invalid-feedback">Ingrese cédula.!</div>
                        </div> 
                        </div> 
                        <div class="form-group row">
                        <label for="" class="col-sm-2" > CODIGO CATEGORIA: </label>
                      <div class="col-sm-4">
                                                          
                      </div>
                      </div>  
                        ...
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
  $('#DtableProductos').DataTable();
});

</script>



<div class="container">
      <hr>
        <h2>  </h2>
        <hr>
        <button type="button" class="btn btn-danger" data-toggle="modal">
        <a class="btn btn-danger" href="reportes/productopdf.php"><h6>Reporte Pdf</h6></a>
    
</button>
<hr>
<hr>
<?php

