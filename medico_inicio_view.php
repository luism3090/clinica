<?php
session_start(); 

if(!isset($_SESSION["id_tipo_usuario"]))
{

  header("Location: index.php");
}

?>
<!DOCTYPE html>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
     <link rel="stylesheet" href="css/ficha_identificacion_tabla_view.css"> 
          <link href="css/fontawesome.min.css" rel="stylesheet">
 <!--  <link href="css/brands.min.css" rel="stylesheet"> -->
  <link href="css/solid.min.css" rel="stylesheet">

  <style type="text/css">
    html,body {
   height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
   background-image: url(imagenes/fondo.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: 104%;
}
  </style>


    <title>Inicio</title>
  </head>

  <body style='background-image: url("imagenes/fondo.jpg");background-repeat: no-repeat;'>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand " href="#">CQH Médico</a>

 <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="medico_inicio_view.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="medico_bandeja_view.php">Bandeja<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id='navSalir' href="#" tabindex="-1">Salir</a>
      </li>
      <li class="nav-item" id='navUsuario'>
        <i class="fas fa-user fa-lg"></i> <?php echo $_SESSION["nombre_usuario"];?>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Id paciente" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form> -->
  </div>
</nav>

<div>
<h1 style='margin-left:30px'>Bienvenido al SGECE Clínicas Quirúrgicas de Huatusco</h1>
</div>


  </body >

 <footer class="text-center footer-style" style='margin-top:39%'>
    <div class="container">
        
            <div class="col-md-12 footer-col">
                
                <label>Nuestro servicio cuenta con aviso de privacidad.  Avenida 1 Poniente #128 entre calles 10 y 12  CP: 940100  Tel: (01)273 734 08 88  Huatusco,Veracruz. Email: degabriel57@yahoo.com.mx</label>
            </div>
        </div>
    </div>
</footer>


  <script src="libreriasJS/jquery.min.js"></script>

  <script src="libreriasJS/bootstrap.min.js"></script>
  <script src="libreriasJS/bootstrapValidator.js"></script>
    <script src="libreriasJS/jquery.dataTables.min.js"></script>
     <script src="libreriasJS/dataTables.bootstrap.min.js"></script>
     <script src="js/medico_bandeja_view.js"></script>


</html>
