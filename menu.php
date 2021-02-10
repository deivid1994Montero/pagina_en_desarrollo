
<?php
   //Inicio de Sesión

   session_start();
   $usu =  $_SESSION['usuario'];
   if(!isset($usu)){
       header('Location: index.php');
   }

?>
<html>
<head>
 <meta charset="utf-8">

</head>
<body>
   <h2>Bienvenido </h2>

  
</body>
</html>

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

<nav class="navbar navbar-expand-lg navbar-light bg-info" >
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <a class="navbar-brand" href="clientes.php" style="width:50"><h1>Clientes</h1></a>
  <hr>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <hr>
  <a class="navbar-brand" href="productos.php"><h1>Productos</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<hr>
  <a class="navbar-brand" href="proveedores.php"><h1>Proveedores</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <hr>
  <a class="navbar-brand" href="categorias.php"><h1>Categorias</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <hr>
  <a class="navbar-brand" href="reportes/productopdf.php"><h1>Reporte Pdf</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <hr>
  
  </button>

    <hr>
    </ul>


  </div>

</nav>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 ml-auto mr-auto mt-5">

        </div>
