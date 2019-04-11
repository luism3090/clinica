<?php

session_start(); 

if(isset($_SESSION["id_tipo_usuario"]))
{

   if($_SESSION["id_tipo_usuario"]=='3'){
        header("Location: ficha_identificacion_inicio_view.php");
      }
      
      else if($_SESSION["id_tipo_usuario"]=='2') {
        header("Location: medico_inicio_view.php");
      }
      else if($_SESSION["id_tipo_usuario"]=='1') {

        header("Location: Registro.php"); 
      }  

  
}

?>

<!DOCTYPE html>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <link href="css/solid.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap2.min.css"> -->
    

    <title>Login Usuario</title>
  </head>
  <body>

<nav class="navbar navbar-dark bg-primary">
 
  <a class="navbar-brand" href="#">SGECE Clínicas Quirúrgicas de Huatusco</a>
  <img class='logo' src = "imagenes/logo.jpg"> 
  </nav>
      
   

<div class="container-fluid">

    <div class="content row" >
      
            <div class="col-md-9">
                    <img src="imagenes/fondo.jpg" class="background">

                  </div>


            <div class="col-md-3" style='margin-left: -15px'>
             <form id="formLogin" >
                <br><br><br><br><br><br><br><br><br>
                  <div class="row">
                        <div class='col-sm-12'>
                            <div class="form-group">
                                    <label for="txtUsuario" class="col-sm-2 col-form-label">Usuario</label>
                                    <input type="text" class="form-control" id="txtUsuario" placeholder="Nombre de Usuario" name="txtUsuario" >
                            </div>
                        </div>
                  </div>
                  <br>
                  <div class="row">
                        <div class='col-sm-12'>
                            <div class="form-group">
                                <label for="txtContrasena" class="col-sm-2 col-form-label">Contraseña</label>
                                <input type="password" class="form-control" id="txtContrasena" placeholder="Contraseña" name="txtContrasena" >
                            </div>
                        </div>
                  </div>
                 <br>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <center>
                      <button type="submit" name="submit" class="btn btn-primary btn-lg" >Ingresar</button>
                      </center>
                    </div>
                  </div>
            </form>
               
            </div>
                  
    </div>
</div>


<div id="modalAlertaSuccess" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alerta</h4>
      </div>
      <div class="modal-body">
        <center><p><i class="fas fa-check-circle fa-lg"></i> <label class='mldMsj'></label> </p></center>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnMd">Aceptar</button>
      </div>
    </div>

  </div>
</div>

<div id="modalAlertaWarning" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alerta</h4>
      </div>
      <div class="modal-body">
        <center><p><i class="fas fa-exclamation-circle fa-lg"></i> <label class='mldMsj'></label> </p></center>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnMd">Aceptar</button>
      </div>
    </div>

  </div>
</div>

<div id="modalAlertaError" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alerta</h4>
      </div>
      <div class="modal-body">
        <center><p><i class="fas fa-times fa-lg"></i> <label class='mldMsj'></label> </p></center>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnMd">Aceptar</button>
      </div>
    </div>

  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="libreriasJS/jquery.min.js"></script>
    <script src="libreriasJS/popper.min.js"></script>
    <script src="libreriasJS/bootstrap.min.js"></script>
    <script src="libreriasJS/bootstrapValidator.js"></script>
    <script src="js/login.js"></script>
  </body>



<div id = "footer">
    <label class = "footer-title"><a>Nuestro servicio cuenta con aviso de privacidad.  Avenida 1 Poniente #128 entre calles 10 y 12  CP: 940100  Tel: (01)273 734 08 88  Huatusco,Veracruz. Email: degabriel57@yahoo.com.mx</a></label>
  </div>



</html>

