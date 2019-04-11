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

  <style>
body{ 
    margin-top:40px; 
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

</style>


    <title>Bandeja</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-top: -41px;">
  <a class="navbar-brand " href="#">CQH Médico</a>

 <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="medico_inicio_view.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
  
  <img class="logo" src="imagenes/logo.jpg" style='position: absolute;left: 0.5%;top: 6.5%;'>

<div class="container" style="margin-left:12%;width:78%;" >
                    
                    

                    <center><h3>Bandeja de pacientes</h3> </center>
             
                    <br><br>

                    <div class="row" style='width: 115%;margin-left: -110px;'  >

                         <div class="col-xs-12 ">

                              <div class="table-responsive">

                                     <table class="table table-bordered table-hover" id="tblPacientesBandeja" cellspacing="0"  style="text-align: center;width:110% !important">
                                         
                                             <caption style="text-align: center"><h4><strong>Pacientes</strong></h4></caption>
                                         
                                                  <thead>
                                                       <tr>
                                                           <th>RFC</th>
                                                           <th>Paciente</th>
                                                           <th>Edad</th>
                                                           <th>Fecha de elaboración</th>
                                                           <th>Municipio</th>
                                                           <th>Dirección</th>
                                                           <th>Teléfono de casa</th>
                                                           <th>Celular</th>
                                                           <th>Enfermera</th>
                                                           <th>Historia clínica</th>
                                                       </tr>
                                                 </thead>
                                    </table>
                              </div>
                         </div>
                    </div>
                        
               <br><br>
                        

                    

      </div>


</div>


<div id="modalFormHistoriaClinica" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content" style='width: 1450px;margin-left:-445px;overflow:auto;height: 650px;'>
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modificar la ficha de identificación del paciente <strong class='lblPaciente'></strong></h4>
      </div>
      <div class="modal-body" data-num_ficha='' data-id_paciente='' data-id_signos_vitales='' >

            
  <div class="container">  <!--contenedor principal-->




      <div class="stepwizard">   <!--contenedor stepwizard-->

           <div class="stepwizard-row setup-panel">     <!--contenedor stepwizard-row setup-panel-->

            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>AHF</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>APNP</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>APP</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>AGO</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p>HPA</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                <p>Int</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                <p>Exp</p>
            </div>
            
            <div class="stepwizard-step">
                <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                <p>DX</p>
            </div>
       
        </div>

    </div>







   
        <form role="form">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                      <div class="container">
                        <h3>AHF</h3>
                        <div class="form-group">
                           
        <div class="container">
        <br>
        
        <form>

          <div class="form-row">



     <!------------------------------------Formulario del paso 1-------------------------------------------------------------------->




              <div class="form-group col-md-10">
               <div class="form-group">
                <label for="Enfermedades_ABPaterno">Enfermedad(es) Abuelo Paterno</label>
                <textarea class="form-control" id="Enfermedades_ABPaterno" rows="2" required="required" name="enfeAbueloPat"></textarea>
              </div>
              
            </div>


            <div class="form-group col-md-2">
                <label for="inputEdad_AbPaterno">Edad(años)</label>
                <input type="number" class="form-control" id="inputEdad_AbPaterno" placeholder="seleccione edad" name="edadAbueloPat"  values="inputEdad_AbPaterno" min="0" max="105" required="required">
            </div>


              <div class="form-group col-md-10">
               <div class="form-group">
                <label for="Enfermedades_ABPaterna">Enfermedad(es) Abuela Paterna</label>
                <textarea class="form-control" id="Enfermedades_ABPaterno" rows="2" required="required" name="enfeAbuelaPat"></textarea>
              </div>
              
            </div>


          <div class="form-group col-md-2">
              <label for="inputEdad_AbPaterna">Edad(años)</label>
              <input type="number" class="form-control" id="inputEdad_AbPaterna" placeholder="seleccione edad" name="edadAbuelaPat"  values="inputEdad_AbPaterna" min="0" max="105" required="required">
            </div>

            <div class="form-group col-md-10">
             <div class="form-group">
              <label for="Enfermedades_ABMaterno">Enfermedad(es) Abuelo Materno</label>
              <textarea class="form-control" id="Enfermedades_ABMaterno" rows="2" required="required" name="enfeAbueloMat
              "></textarea>
            </div>
            
          </div>


          <div class="form-group col-md-2">
              <label for="inputEdad_AbMaterno">Edad(años)</label>
              <input type="number" class="form-control" id="inputEdad_AbMaterno" placeholder="seleccione edad" name="edadAbueloMat"  values="inputEdad_AbMaterno" min="0" max="105" required="required">
            </div>

            <div class="form-group col-md-10">
             <div class="form-group">
              <label for="Enfermedades_ABMaterna">Enfermedad(es) Abuela Materna</label>
              <textarea class="form-control" id="Enfermedades_ABMaterna" rows="2" required="required" name="enfeAbuelaMat"></textarea>
            </div>
            
          </div>


          <div class="form-group col-md-2">
              <label for="inputEdad_AbMaterna">Edad(años)</label>
              <input type="number" class="form-control" id="inputEdad_AbMaterna" placeholder="seleccione edad" name="edadAbuelaMat"  values="inputEdad_AbMaterna" min="0" max="105" required="required">
            </div>

            <div class="form-group col-md-10">
             <div class="form-group">
              <label for="Enfermedades_Padre">Enfermedad(es) Padre</label>
              <textarea class="form-control" id="Enfermedades_Padre" rows="2" required="required" name="enfePadre"></textarea>
            </div>
            
          </div>


          <div class="form-group col-md-2">
              <label for="inputEdad_Padre">Edad(años)</label>
              <input type="number" class="form-control" id="inputEdad_Padre" placeholder="seleccione edad" name="edadPadre"  values="inputEdad_Padre"
            min="0" max="105" required="required">
          </div>

            <div class="form-group col-md-10">
             <div class="form-group">
              <label for="Enfermedades_Madre">Enfermedad(es) Madre</label>
              <textarea class="form-control" id="Enfermedades_Madre" rows="2" required="required" name="enfeMadre"></textarea>
            </div>
            
          </div>


          <div class="form-group col-md-2">
              <label for="inputEdad_Madre">Edad(años)</label>
              <input type="number" class="form-control" id="inputEdad_Madre" placeholder="seleccione edad" name="edadMadre"  values="inputEdad_Madre"min="0" max="105" required="required">
            </div>

            <div class="form-group col-md-12">
             <div class="form-group">
              <label for="Enfermedades_Hermanos">Enfermedad(es) Hermano(s)</label>
              <textarea class="form-control" id="Enfermedades_Hermanos" rows="3" placeholder="indique enfermedades y edades" required="required" name="enfeHermanos"></textarea>
            </div>
            
          </div>


          <div class="form-group col-md-12">
             <div class="form-group">
              <label for="Enfermedades_Hermanas">Enfermedad(es) Hermana(s)</label>
              <textarea class="form-control" id="Enfermedades_Hermanas" rows="3" placeholder="indique enfermedades y edades" required="required" name="enfeHermanas"></textarea>
            </div>
            
          </div>




            </form>
          </div>


        
      <!--No modificar--> 



  </form>

      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
                  </div>
              </div>
          </div>
                     
          
                  </div>
              </div>
          </div>




   <!------fin de formulario 1--->






      <div class="container">
      <form role="form">
          <div class="row setup-content" id="step-2">
              <div class="col-xs-12">
                  <div class="col-md-12">
                      <h3>APNP</h3>
                      <div class="form-group">
                         

        <br>
        <form>

          <div class="form-row">



<!------------------------------------Formulario del paso 2-------------------------------------------------------------------->

      <div class="form-group col-md-12">

         <div class="form-group">
          <label for="Tipo_vivienda">Tipo de vivienda</label>
          <textarea class="form-control" id="vivienda" rows="2" required="required" name="tipoVivienda"></textarea>
      </div>
      </div>


      <div class="form-group col-md-12">

         <div class="form-group">
          <label for="Alimentación">Hábitos higienico-nutricionales</label>
          <textarea class="form-control" id="Alimentación" rows="2" required="required" name="habitosHigNu"></textarea>
      </div>
      </div>


      <div class="form-group col-md-12">

         <div class="form-group">
          <label for="Higiene_personal">Higiene personal</label>
          <textarea class="form-control" id="Higiene_personal" rows="2" required="required" name="higienePersonal"></textarea>
      </div>
      </div>



      <div class="form-group col-md-12">

         <div class="form-group">
          <label for="Accidentes">Accidentes</label>
          <textarea class="form-control" id="Accidentes" rows="2" required="required" name="accidentes"></textarea>
      </div>
      </div>


        <div class="col-md-4 form-group">
        <label for="Hemotipo">Hemotipo</label>
        <input type="text" class="form-control" id="InputHemotipo" name="hemotipo" required="required">
        </div>

       <div class="col-md-2 form-group">
      <label for="Apgar">Apgar</label>
      <input type="text" class="form-control" id="InputApgar" name="apgar" required="required">
      </div>

       <div class="form-group col-md-6">
      <label for="inputVía_nacimiento">Vía de nacimiento</label>
      <select id="inputVía_nacimiento" class="form-control" name="viaNacimiento" values="inputVía_nacimiento" required="required">
      <option selected>Elija una opción</option>
      <option value="1">Parto normal</option>
      <option value="2">Cesárea</option>
      </select>
      </div> 

      <div class="col-md-6 form-group">
        <label for="Actividad_física">Actividad física</label>
        <input type="text" class="form-control" id="InputActividad_física" name="actividadFisica" required="required">
        </div>

        <div class="col-md-6 form-group">
        <label for="Actividad_recreativa">Actividad recreativa</label>
        <input type="text" class="form-control" id="InputActividad_recreativa" name="actividadRecreativa" required="required">
        </div>




       </form>
      </div>
        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Continuar</button>
      </div>
      </div>


  
<!--No modificar--> 

 

</div>
                
            </div>
        </div>
    </div>
               
    
            </div>
        </div>
    </div>




<!------fin de formulario 2--->








<div class="container">
<form role="form">
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>APP</h3>
                <div class="form-group">
                   

<br>
<form>

  <div class="form-row">



<!------------------------------------Formulario del paso 3-------------------------------------------------------------------->

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Alérgicos">Alérgicos</label>
    <textarea class="form-control" id="Alérgicos" rows="2" name="alergicos" required></textarea>
  </div>
  </div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Transfusiones">Transfusiones</label>
    <textarea class="form-control" id="Transfusiones" rows="2" name="transfusiones" required="required"></textarea>
  </div> 
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Quirúrgicos">Quirúrgicos</label>
    <textarea class="form-control" id="Quirúrgicos" rows="2" placeholder="indique cirugías/tratamientos quirúrgicos" name="quirurgicos" required="required"></textarea>
  </div>
  
</div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Anestésicos">Anestésicos</label>
    <textarea class="form-control" id="Anestésicos" rows="2" name="anestesicos" required="required"></textarea>
  </div>
  
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Traumatismos">Traumatismos</label>
    <textarea class="form-control" id="Traumatismos" rows="2" name="traumatismos" required="required"></textarea>
  </div>
  
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Hospitalizaciones">Hospitalizaciones</label>
    <textarea class="form-control" id="Hospitalizaciones" rows="2" name="hospitalizaciones" required="required"></textarea>
  </div>
</div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Infecciosas">Infecciosas</label>
    <textarea class="form-control" id="Infecciosas" rows="2" name="infecciosas" required="required"></textarea>
  </div> 
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Cronico_degenerativas">Crónico degenerativas y tratamientos</label>
    <textarea class="form-control" id="Cronico_degenerativas" rows="2" name="cronicoDegeTrata" required="required"></textarea>
  </div>
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="PatologíasDEm">Patologías asociadas al desarrrollo embrionario</label>
    <textarea class="form-control" id="PatologíasDEm" rows="2" name="patalogiasDesaEmb" required="required"></textarea>
  </div>
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Tumorales">Tumorales</label>
    <textarea class="form-control" id="Tumorales" rows="2" name="tumorales" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Adicciones">Adicciones</label>
    <textarea class="form-control" id="Adicciones" rows="2" name="adicciones" required="required"></textarea>
  </div>
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Otras">Otras</label>
    <textarea class="form-control" id="Otras" rows="2" name="otras" required="required"></textarea>
  </div>
</div>


  </form>
</div>



</div>
  
  </form>

</div>



<!--No modificar--> 

  </form>

</div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
            </div>
        </div>
    </div>
               
    
            </div>
        </div>
    </div>




<!------fin de formulario 3--->




<div class="container">
<form role="form">
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>AGO</h3>
                <div class="form-group">
                   

<br>
<form>

  <div class="form-row">



<!------------------------------------Formulario del paso 4-------------------------------------------------------------------->



<div class="col-md-3 form-group">
                        <label for="nombre">Edad Menarca (años)</label>
                                <input type="number" class="form-control" id="InputEdad_Menarca" name="edadMenarca" values="InputEdad_Menarca" placeholder="Seleccione edad" min="0" max="105" required="required">
                            </div>


<div class="form-group col-md-6">
   <div class="form-group">
    <label for="Tipo_ciclos">Tipo de ciclos</label>
    <textarea class="form-control" id="Tipo_ciclos" rows="2" name="tipoCiclos" required></textarea>
  </div>
</div>

                            <div class="col-md-3 form-group">
                            <label for="InputEdad_IVSA">Edad IVSA* (años)</label>
                            <input type="number" class="form-control" id="InputEdad_IVSA" name="edadIvsa" placeholder="Seleccione edad*" min="0" max="105" required="required">
                            </div>


                            <div class="col-md-2 form-group">
                            <label for="InputNum_PS">Num. PS*</label>
                            <input type="number" class="form-control" id="InputNum_PS" name="numPaSe" placeholder="Seleccione número*" min="0" max="100" required="required">
                            </div>



                            <div class="col-md-3 form-group">
                            <label for="InputNum_Gestaciones">Num. Gestaciones*</label>
                            <input type="number" class="form-control" id="InputNum_Gestaciones" name="numGestaciones" placeholder="Seleccione número*" min="0" max="30" required="required">
                            </div>

                            

                             <div class="col-md-2 form-group">
                            <label for="InputNum_Partos">Num. Partos*</label>
                            <input type="number" class="form-control" id="InputNum_Partos" name="numPartos" placeholder="Seleccione número*" min="0" max="30" required="required">
                            </div>

                             <div class="col-md-2 form-group">
                            <label for="InputNum_Abortos">Num.Abortos*</label>
                            <input type="number" class="form-control" id="InputNum_Abortos" name="numAbortos" placeholder="Seleccione número*" min="0" max="30" required="required">
                            </div>

                             <div class="col-md-3 form-group">
                            <label for="InputNum_Cesáreas">Num Cesáreas*</label>
                            <input type="number" class="form-control" id="InputNum_Cesáreas" name="numCesareas" placeholder="Seleccione número*" min="0" max="30" required="required">
                            </div>

                            
<div class="form-group col-md-6">
   <div class="form-group">
    <label for="FUM">Fin de última menstruación (FUM)</label>
    <textarea class="form-control" id="FUM" rows="2" name="finUlMen" required="required"></textarea>
  </div>
</div>


<div class="form-group col-md-6">
   <div class="form-group">
    <label for="Estudios_DOCMA">Estudios DOCMA</label>
    <textarea class="form-control" id="docma" rows="2" name="estudiosDocma" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-6">
   <div class="form-group">
    <label for="Examen_PAP">Exámen PAP</label>
    <textarea class="form-control" id="Examen_PAP" rows="2" name="examenPap" required="required"></textarea>
  </div>
</div>


                            <div class="col-md-6 form-group">
                            <label for="InputETS">ETS</label>
                            <input type="text" class="form-control" id="InputETS" name="enfeTraSe" required="required">
                            </div>

                           
                            <div class="col-md-6 form-group">
                            <label for="Control_fertilidad">Control de fertilidad</label>
                            <input type="text" class="form-control" id="InputControl_fertilidad" name="controlFertilidad" placeholder="indique método anticonceptivo" required="required">
                            </div>

<div class="form-group col-md-6">
   <div class="form-group">
    <label for="Lactancia_materna">Lactancia materna</label>
    <textarea class="form-control" id="Lactancia_materna" rows="2" name="lactanciaMaterna" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-8">
   <div class="form-group">
    <label for="Patología_GMamaria">Patología en Glándula Mamaria*</label>
    <textarea class="form-control" id="Patología_GMamaria" rows="2" name="patologiaGlanMam" required="required"></textarea>
  </div>
</div>

<div class="col-md-4 form-group">
                            <label for="InputEdad_Menopausia">Edad de inicio de menopausia (años)*</label>
                            <input type="number" class="form-control" id="InputEdad_Menopausia" name="edadMenopausia" placeholder="Seleccione edad*" min="0" max="70" required="required">
                            </div>                      





<!--No modificar--> 

  </form>

</div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
            </div>
        </div>
    </div>
               
    
            </div>
        </div>
    </div>


<!------fin de formulario 4--->


<div class="container">
<form role="form">
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
               <center><h3>Historia del padecimiento actual</h3></center> 
                <div class="form-group">
                   

<br>
<form>

  <div class="form-row">



<!------------------------------------Formulario del paso 5-------------------------------------------------------------------->




  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Descripción_HPA">Descripción</label>
    <textarea class="form-control" id="Descripción_HPA" rows="15" name="descripcionHiPadAc" required="required"></textarea>
  </div>
  
</div>


 


  </form>
</div>



</div>
  
  </form>

</div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
            </div>
        </div>
    </div>

</div>



</form>

</div>

<!--Fin de formulario 5---->




<div class="container">
<form role="form">
    <div class="row setup-content" id="step-6">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Interrogatorio Aparatos/Sistemas</h3>
                <div class="form-group">
                   

<br>
<form>

  <div class="form-row">



<!------------------------------------Formulario del paso 6-------------------------------------------------------------------->

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Aparato_respiratorio">Aparato Respiratorio</label>
    <textarea class="form-control" id="Aparato_respiratorio" rows="2" name="aparatoRespiratorio" required="required"></textarea>
  </div>
  </div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Aparato_genitourinario">Aparato Genitourinario</label>
    <textarea class="form-control" id="Aparato_genitourinario" rows="2" name="aparatoGenitourinario" required="required"></textarea>
  </div> 
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Piel">Piel</label>
    <textarea class="form-control" id="Piel" rows="2" name="piel" required="required"></textarea>
  </div>
  
</div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Sistema_cardiovascular">Sistema Cardiovascular</label>
    <textarea class="form-control" id="Sistema_cardiovascular" rows="2" name="sisCardio" required="required"></textarea>
  </div>
  
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Sistema_musculoesqueletico">Sistema Musculoesquelético</label>
    <textarea class="form-control" id="Sistema_musculoesqueletico" rows="2" name="sisMus" required="required"></textarea>
  </div>
  
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Sistema_neurologico">Sistema Neurológico</label>
    <textarea class="form-control" id="Sistema_neurologico" rows="2" name="sisNeu" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Sistema_digestivo">Sistema Digestivo</label>
    <textarea class="form-control" id="Sistema_digestivo" rows="2" name="sisDiges" required="required"></textarea>
  </div>
</div>


  </form>
</div>



</div>
  
  </form>

</div>



<!--No modificar--> 

  </form>

</div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
            </div>
        </div>
    </div>
               
    
            </div>
        </div>
    </div>

<!------fin de formulario 6--->



<div class="container">
<form role="form">
    <div class="row setup-content" id="step-7">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Exploración física general</h3>
                <div class="form-group">
                   

<br>
<form>

  <div class="form-row">



<!------------------------------------Formulario del paso 7-------------------------------------------------------------------->

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Edad_aparente">Edad aparente</label>
    <textarea class="form-control" id="Edad_aparente" rows="2" name="edadAparente" required="required"></textarea>
  </div>
  </div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Marcha">Marcha</label>
    <textarea class="form-control" id="Marcha" rows="2" name="marcha" required="required"></textarea>
  </div> 
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Facies">Facies</label>
    <textarea class="form-control" id="Facies" rows="2" name="facies" required="required"></textarea>
  </div>
  
</div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Posturas">Posturas</label>
    <textarea class="form-control" id="Posturas" rows="2" name="posturas" required="required"></textarea>
  </div>
  
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Cabeza">Cabeza</label>
    <textarea class="form-control" id="Cabeza" rows="2" name="cabeza" required="required"></textarea>
  </div>
  
</div>



  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Cuello">Cuello</label>
    <textarea class="form-control" id="Cuello" rows="2" name="cuello" required="required"></textarea>
  </div>
</div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Tórax">Tórax</label>
    <textarea class="form-control" id="Tórax" rows="2" name="torax" required="required"></textarea>
  </div> 
</div>

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Precordio">Precordio</label>
    <textarea class="form-control" id="Precordio" rows="2" name="precordio" required="required"></textarea>
  </div> 
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Abdomen">Abdomen</label>
    <textarea class="form-control" id="Abdomen" rows="2" name="abdomen" required="required"></textarea>
  </div>
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Extremidades">Extremidades</label>
    <textarea class="form-control" id="Extremidades" rows="2" name="extremidades" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Genitales">Genitales</label>
    <textarea class="form-control" id="Genitales" rows="2" name="genitales" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="Columna_vertebral">Columna vertebral</label>
    <textarea class="form-control" id="Columna_vertebral" rows="2" name="columnaVer" required="required"></textarea>
  </div>
</div>

<div class="form-group col-md-12">
   <div class="form-group">
    <label for="AgudezaVisual">Agudeza visual</label>
    <textarea class="form-control" id="AgudezaVisual" rows="2" name="agudezaVis" required="required"></textarea>
  </div>
</div>




<div class="col-md-12 form-group">
      <div class="form-group">
    <label for="RevaloraciónSignos">Revaloración de signos vitales</label>
    <textarea class="form-control" id="RevaloraciónSignos" rows="2" name="revaloracion" required="required"></textarea>
  </div>              
                         
                </div>
  </form>
</div>



</div>
  
  </form>

</div>



<!--No modificar--> 

  </form>

</div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
            </div>
        </div>
    </div>
               
    
            </div>
        </div>
    </div>




<!------fin de formulario 7--->



<div class="container">
<form role="form">
    <div class="row setup-content" id="step-8">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Diagnóstico clínico</h3>
                <div class="form-group">
                   

<br>
<form>

  <div class="form-row">



<!------------------------------------Formulario del paso 8-------------------------------------------------------------------->


<div class="col-md-12 form-group">
                        <label for="InputPatologiasAgregadas">Patologías agregadas</label>
                        
                                <input type="text" class="form-control" id="InputPatologiasAgregadas" name="patAgregadas" values="PatologíasAgregadas" required="required">
                            </div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Comentario_clinico">Comentario clínico</label>
    <textarea class="form-control" id="ComentarioClinico" rows="15" name="comenCli" required="required"></textarea>
  </div>
  
</div>


  <div class="form-group col-md-12">
   <div class="form-group">
    <label for="Laboratoriales">Laboratoriales</label>
    <textarea class="form-control" id="Laboratoriales" rows="3" name="laboratoriales" placeholder="indique laboratoriales a realizar" required="required"></textarea>
  </div>
  
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="PropuestaTratamiento">Propuesta de tratamiento</label>
    <textarea class="form-control" id="PropuestaTratamiento" rows="6" name="propuestaTrat" required="required"></textarea>
  </div>
  
</div>


<div class="form-group col-md-12">
   <div class="form-group">
    <label for="PronósticoSalud">Pronóstico de salud</label>
    <textarea class="form-control" id="PronósticoSalud" rows="6" name="pronSalud" required="required"></textarea>
  </div>
  
</div>



  

  </form>
</div>



</div>
  
  </form>

</div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finalizar</button>
                <button class="btn btn-secondary btn-lg pull-left" type="submit">Generar receta</button>
            </div>
        </div>
    </div>

</div>



</form>

</div>

<!--Fin de formulario 8---->




      </div>
     <!--  <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnMdlFormModificarFichaPaciente">Moficiar</button>
      </div> -->
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


  </body>

 <footer class="text-center footer-style">
    <div class="container">
        
            <div class="col-md-12 footer-col">
                
                <p>Nuestro servicio cuenta con aviso de privacidad.  Avenida 1 Poniente #128 entre calles 10 y 12  CP: 940100  Tel: (01)273 734 08 88  Huatusco,Veracruz. Email: degabriel57@yahoo.com.mx</p>
            </div>
        </div>
    </div>
</footer>


  <script src="libreriasJS/jquery.min.js"></script>
<script src="libreriasJS/popper.min.js"></script>
  <script src="libreriasJS/bootstrap.min.js"></script>
  <script src="libreriasJS/bootstrapValidator.js"></script>
    <script src="libreriasJS/jquery.dataTables.min.js"></script>
     <script src="libreriasJS/dataTables.bootstrap.min.js"></script>
     <script src="js/medico_bandeja_view.js"></script>

<script>
  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>


</html>
