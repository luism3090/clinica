<?php
// session_start(); 

//session_unset(); tiene k estar en el boton de salir y redirigirlo al index

// if(isset($_SESSION["usuario"]))
// {

//    if($_SESSION["usuario"]=='enfermera'){
//         header("Location: ficha.php");
//       }
      
//       else if($_SESSION["usuario"]=='medico') {
//         header("Location: hiscli.php");
//       }
//       else if($_SESSION["usuario"]=='admin') {

//         header("Location: Registro.php"); 
//       }  

  
// }

?>

<!doctype html>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap2.min.css"> -->
    

    <title>Login_Usuario</title>
  </head>
  <body>

<nav class="navbar navbar-dark bg-primary">
 
  <a class="navbar-brand" href="#">Bienvenido al SGECE Clínicas Quirúrgicas de Huatusco</a>
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

<div id="modalAlerta" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alerta</h4>
      </div>
      <div class="modal-body">
        
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

<style type="text/css">
  .background{
    height: 100vh;
  width: 100%;
 text-align: center;
  position: relative;
  }

#footer{
  text-align: center;
  background-color: rgba( 10, 77, 255, 0.7 );
}

.formulario{
  border-radius: 10px ;
height: 24%;
 margin-top: 125px;
background-position: relative;
  
}

.bg-primary
{
    background: #007bff !important;
    height: 85px;
}


.logo{
    float: right;
    margin: 9px;
}

.navbar-brand{
    color: white;
    margin-top: 17px;
}

.content{
    margin: -19px;
}

#footer
{
    margin-top: 0px;
    font-size: 15px;
}

#footer a
{
    color: black;
}

</style>