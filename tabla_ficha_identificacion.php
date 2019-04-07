<!doctype html>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
     <link rel="stylesheet" href="css/tabla_ficha_identificacion.css"> 


    <title>Inicio_enf</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand " href="#">CQH Enfermera</a>

 <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="tabla_ficha_identificacion.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ficha_identificacion.php">Crear ficha <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1">Salir</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Id paciente" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form> -->
  </div>
</nav>

<div>
  

      <div class="container" style="margin-left:12%;width:78%;" >
                    
                    <br><br>

                    <center><h3>Pacientes con ficha de identificación</h3> </center>
             
                    <br><br>

                    <div class="row">

                         <div class="col-xs-12 ">

                              <div class="table-responsive">

                                     <table class="table table-bordered table-hover" id="tblPacientesFicha" cellspacing="0"  width="100%" style="text-align: center;">
                                         
                                             <caption style="text-align: center"><h4><strong>Pacientes</strong></h4></caption>
                                         
                                                  <thead>
                                                       <tr>
                                                           <th>RFC</th>
                                                           <th>Nombre</th>
                                                           <th>Edad</th>
                                                           <th>Fecha de elaboración</th>
                                                           <th>Municipio</th>
                                                           <th>Dirección</th>
                                                           <th>Teléfono de casa</th>
                                                           <th>Celular</th>
                                                           <th>Médico Tratante</th>
                                                           <th>Ficha identificación</th>
                                                       </tr>
                                                 </thead>
                                    </table>
                              </div>
                         </div>
                    </div>
                        
               <br><br>
                        

                    

      </div>


</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="libreriasJS/jquery.min.js"></script>

  <script src="libreriasJS/bootstrap.min.js"></script>

    <script src="libreriasJS/jquery.dataTables.min.js"></script>
     <script src="libreriasJS/dataTables.bootstrap.min.js"></script>
     <script src="js/tabla_ficha_identificacion.js"></script>
 



  </body>

 <footer class="text-center footer-style">
    <div class="container">
        
            <div class="col-md-12 footer-col">
                
                <p>Nuestro servicio cuenta con aviso de privacidad.  Avenida 1 Poniente #128 entre calles 10 y 12  CP: 940100  Tel: (01)273 734 08 88  Huatusco,Veracruz. Email: degabriel57@yahoo.com.mx</p>
            </div>
        </div>
    </div>
</footer>



</html>
