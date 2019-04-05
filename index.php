<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    

   <!--  <link rel="stylesheet" href="css/bootstrap.min.css">-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ficha_identificacion.css">
    

    <title>Ficha</title>
  </head>
  <body>



<!--Barra de navegación-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CQH Enfermera</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="enfe.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1">Salir</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Id expediente" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> -->
    </form>
  </div>
</nav>

<!--Termina barra de navegación-->



<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top">
    <img src="imagenes/logo.jpg" width="120" height="70" class="d-inline-block align-top" alt="Logo Clínica">
    NÚM DE REGISTRO SEMARNAT   3007192310078198
  </nav>




<div align="center">

    <h3>Ficha de identificación</h3>

</div>
<br>
<br>

<div class="container">


            <form id="formFichaIdentificacion" >
    
  
                <div class="row contInfoId">

                             	<div class="col-xs-12">
                                   
                                   <div class="form-group">

                                          <label for="txtIdPaciente">Id paciente</label>
                                          <input type="text" class="form-control" id="txtIdPaciente" name="txtIdPaciente" placeholder="Id de paciente" maxlength="13">
                                          <small id="IdHelpBlock" class="form-text text-muted">
                                          RFC (Escriba todo junto y en mayúsculas: las primeras 2 letras del apellido paterno, primer letra del apellido materno, primer letra del nombre, ultimos 2 digitos del año de nacimiento, dos digitos del mes, dos digitos del dia. Ejemplo: RERS950225)
                                          </small>

                                   </div>  

                             </div>

                </div>


                 <div class="row">
                         
                       <div class="col-xs-6">
                             
                             <div class="form-group">
                                 <label for="txtFechaHoraElab">Fecha y hora de elaboración</label>
                                 <input type="date" class="form-control" id="txtFechaHoraElab" name="txtFechaHoraElab" >
                             </div>

                       </div>

                       <div class="col-xs-6">

                             <div class="form-group">

                                   <label for="slTipoInterrogatorio">Tipo de interrogatorio</label>
                                   <select id="slTipoInterrogatorio" class="form-control" name="slTipoInterrogatorio" required>
                                         <option selected disabled="">Elija una opción</option>
                                         <option value="Directo">Directo</option>
                                         <option value="Indirecto">Indirecto</option>
                                   </select>

                           </div>

                       </div>


                 </div>


                 <div class="row">

                         <div class="col-xs-12">

                             <div class="form-group">

                                 <label for="nombre">Acompañante:</label>

                             </div> 

                      </div>

                 </div> 


                 <div class="row contInfoAcompanante">

                           <div class='acompanante'>

                                     <div class="col-md-3">

                                         <div class="form-group">

                                             
                                             <input type="text" class="form-control" id="txtNombreAcompanante" name="txtNombreAcompanante" placeholder="Nombre(s)" maxlength="50">

                                         </div>

                                     </div>  

                                      <div class="col-md-3">

                                             <div class="form-group">

                                                   <input type="text" class="form-control" id="txtApePaternoAcompanante" name="txtApePaternoAcompanante" placeholder="Apellido paterno" maxlength="50">
                                                 
                                             </div>

                                     </div>

                                     <div class="col-md-3">

                                         <div class="form-group">
                                                 
                                                <input type="text" class="form-control" id="txtApeMaternoAcompanante" name="txtApeMaternoAcompanante" placeholder="Apellido materno" maxlength="50">
                                             
                                         </div>

                                     </div>

                                      <div class="col-md-3">

                                             <div class="form-group">
                                                     
                                                    <input type="text" class="form-control" id="txtParentescoAcompanante" name="txtParentescoAcompanante" placeholder="Parentesco" maxlength="40">
                                                 
                                             </div>

                                     </div>                    


                           </div>

                 </div>



                 <div class="row contInfoPaciente">        

                            
                        <div class="col-md-4">

                                 <div class="form-group">

                                     <label for="txtNombrePaciente">Nombre Paciente:</label>
                                     <input type="text" class="form-control" id="txtNombrePaciente" name="txtNombrePaciente" placeholder="Nombre" maxlength="50">

                                 </div>

                        </div>  

                         <div class="col-md-4">

                                <div class="form-group">

                                       <label for="txtApePaterno">Apellido paterno:</label>
                                      <input type="text" class="form-control" id="txtApePaterno" name="txtApePaterno" placeholder="Apellido paterno" maxlength="50">
                                    
                                </div>

                        </div>

                        <div class="col-md-4">

                                 <div class="form-group">
                                        
                                        <label for="txtApeMaterno">Apellido materno:</label>
                                        <input type="text" class="form-control" id="txtApeMaterno" name="txtApeMaterno" placeholder="Apellido materno" maxlength="50">
                                     
                                 </div>

                        </div>

                              

                 </div>


                 <div class="row contInfoPaciente">        

                            
                        <div class="col-md-4">

                                 <div class="form-group">

                                     <label for="txtFechaNacimiento">Fecha de nacimiento:</label>
                                     <input class="form-control" id="txtFechaNacimiento" type='date' name="txtFechaNacimiento" >

                                 </div>

                        </div>  

                         <div class="col-md-4">

                                <div class="form-group">

                                       <label for="txtEdad">Edad (años):</label>
                                      <input type="number" class="form-control" id="txtEdad" name="txtEdad" min="1" max="105">                                    
                                </div>

                        </div>

                        <div class="col-md-4">

                                  <div class="form-group">
                                        
                                          <label for="slGenero">Género</label>
                                          <select id="slGenero" class="form-control" name="slGenero" >
                                                  <option selected disabled>Elija una opción</option>
                                                  <option value="Hombre">Hombre</option>
                                                  <option value="Mujer">Mujer</option>
                                                  <option value="Otro">Otro</option>
                                          </select>
                                   </div>

                        </div>


                 </div>


                 <div class="row contInfoEdoCivil">
                         
                       <div class="col-xs-6">
                             
                             <div class="form-group">

                                      <label for="slEdoCivil">Estado civil</label>

                                      <select id="slEdoCivil" class="form-control" name="slEdoCivil" required>
                                           <option selected disabled="">Elija una opción</option>
                                           <option value="Soltero(a)">Soltero(a)</option>
                                           <option value="Casado(a)">Casado(a)</option>
                                           <option value="Unión libre">Unión libre</option>
                                           <option value="Divorciado">Divorciado</option>
                                           <option value="Viudo(a)">Viudo(a)</option>
                                      </select>

                             </div>

                       </div>

                       <div class="col-xs-6">

                             <div class="form-group">

                                   <label for="txtLugarOrigen">Lugar de origen</label>
                                   <input type="text" class="form-control" id="txtLugarOrigen" name="txtLugarOrigen"  placeholder="localidad,Municipio,Estado" maxlength="100" >

                           </div>

                       </div>


                 </div>


                 <div class="row">

                         <div class="col-xs-12">

                             <div class="form-group">

                                 <label for="nombre">Lugar de residencia:</label>

                             </div> 

                      </div>

                 </div> 


                 <div class="row contInfoLugarResidencia">

                           <div class='acompanante'>

                                     <div class="col-md-4">

                                         <div class="form-group">

                                             <input type="text" class="form-control" id="txtLocalidadResidencia" name="txtLocalidadResidencia" placeholder="Localidad" maxlength="50">

                                         </div>

                                     </div>  

                                      <div class="col-md-4">

                                             <div class="form-group">

                                                  <input type="text" class="form-control" id="txtMunicipioResidencia" name="txtMunicipioResidencia" placeholder="Municipio" maxlength="50">
                                                 
                                             </div>

                                     </div>

                                     <div class="col-md-4">

                                         <div class="form-group">
                                                 
                                              <input type="text" class="form-control" id="txtEstadoResidencia" name="txtEstadoResidencia" placeholder="Estado" maxlength="50">                                             

                                         </div>

                                     </div>


                           </div>

                 </div>


                 <div class="row contInfoLugarResidencia">


                                     <div class="col-md-3">

                                         <div class="form-group">

                                                <input type="text" class="form-control" id="txtColoniaResidencia" name="txtColoniaResidencia" placeholder="Colonia" maxlength="50">

                                         </div>


                                     </div>  

                                      <div class="col-md-3">

                                             <div class="form-group">

                                                  <input type="text" class="form-control" id="txtCalleResidencia" name="txtCalleResidencia" placeholder="Calle" maxlength="50">
                                                 
                                             </div>

                                     </div>

                                     <div class="col-md-3">

                                         <div class="form-group">
                                                 
                                              <input type="text" class="form-control" id="txtNumeroExterior" name="txtNumeroExterior" placeholder="Número Exterior" maxlength="50">

                                         </div>

                                     </div>

                                     <div class="col-md-3">

                                         <div class="form-group">
                                                 
                                              <input type="text" class="form-control" id="txtNumeroInterior" name="txtNumeroInterior" placeholder="Número Interior" maxlength="50">

                                         </div>

                                     </div>

                 </div>



                 <div class="row contInfoEscolaridad">        

                            
                        <div class="col-md-4">

                                 <div class="form-group">

                                     <label for="slEscolaridad">Escolaridad</label>
                                     <select id="slEscolaridad" class="form-control" name="slEscolaridad" >
                                          <option selected disabled>Elija una opción</option>
                                          <option value="Ninguna">Ninguna</option>
                                          <option value="Primaria">Primaria</option>
                                          <option value="Secundaria">Secundaria</option>
                                          <option value="Preparatoria o Bachillerato">Preparatoria o Bachillerato</option>
                                          <option value="Universidad">Universidad</option>
                                          <option value="Carrera técnica">Carrera técnica</option>
                                          <option value="Carrera universitaria">Carrera universitaria</option>
                                          <option value="Maestría">Maestría</option>
                                          <option value="Doctorado">Doctorado</option>
                                          <option value="Otro posgrado">Otro posgrado</option>
                                     </select>

                                 </div>

                        </div>  

                         <div class="col-md-4">

                                <div class="form-group">

                                        <label for="txtCarrera">Carrera</label>
                                        <input type="text" class="form-control" id="txtCarrera" name="txtCarrera"  placeholder="Nombre de Carrera universitaria" maxlength="50">                                  

                                </div>

                        </div>

                        <div class="col-md-4">

                                  <div class="form-group">
                                        
                                         <label for="txtOcupacion">Ocupación</label>
                                         <input type="text" class="form-control" id="txtOcupacion" name="txtOcupacion" maxlength="50" placeholder="Ocupación">

                                   </div>

                        </div>


                 </div>

                 <div class="row contInfoEscolaridad">        

                            
                        <div class="col-md-4">

                                 <div class="form-group">

                                     <label for="txtReligion">Religión</label>
                                     <input type="text" class="form-control" id="txtReligion" name="txtReligion" maxlength="50" placeholder="Religión">

                                 </div>

                        </div>  

                         <div class="col-md-4">

                                <div class="form-group">

                                        <label for="txtCelular">Teléfono celular</label>
                                        <input type="text" class="form-control" id="txtCelular" name="txtCelular" maxlength="10" placeholder="Teléfono celular">

                                </div>

                        </div>

                        <div class="col-md-4">

                                  <div class="form-group">
                                        
                                         <label for="txtTelefono">Teléfono casa </label>
                                         <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" maxlength="10" placeholder="Teléfono casa">

                                   </div>

                        </div>


                 </div>

                 <div class="row contInfoId">

                              <div class="col-xs-12">
                                   
                                   <div class="form-group">

                                          <label for="txtEmail">Email</label>
                                          <input type="email" class="form-control" id="txtEmail" placeholder="Correo electrónico" name="txtEmail" maxlength="50">

                                   </div>  

                             </div>

                </div>



                 <br><br>

                 <center><input type="submit" name="enviar" class='btn btn-primary' value="Guardar" id='btnGuardar' ></center>
  
        </form>

 </div>

 <br><br>
              

<!-- 
                        
                  
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
    </div>


<div class="form-group col-md-12">
<h5 class="subtitulo" align="center">
                            <b>
                                Signos vitales
                            </b>
</div>

<div class="col-md-12 form-group">
                    
                    <div class="row">
                     <div class="col-md-2 form-group">
                        <label for="Peso">Peso</label>
                        <input type="text" class="form-control" id="pes" name="peso" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="Talla">Talla</label>
                        <input type="text" class="form-control" id="ta" name="talla" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="IMC">IMC</label>
                        <input type="text" class="form-control" id="indimc" name="imc" required>
                    </div>
                    <div class="col-md-2 form-group" id="col_select">
                        <label for="Tension_Arterial">T/A</label>
                        <input type="text" class="form-control" id="tenArterial" name="tensionArterial" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="FC">FC</label>
                        <input type="text" class="form-control" id="frecuecar" name="fc" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="FR">FR</label>
                        <input type="text" class="form-control" id="frecueres" name="fr" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="Abdomen">Abdomen</label>
                        <input type="text" class="form-control" id="abdo" name="abdomen" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="Cadera">Cadera</label>
                        <input type="text" class="form-control" id="cade" name="cadera" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="ICC">ICC</label>
                        <input type="text" class="form-control" id="indicincad" name="icc" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="SpO2">SpO2</label>
                        <input type="text" class="form-control" id="oxi" name="oximetria" required>
                    </div>
                    <div class="col-md-2 form-group" id="col_select">
                        <label for="GLIC">GLIC</label>
                        <input type="text" class="form-control" id="glice" name="glic" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="Temp">Temp</label>
                        <input type="text" class="form-control" id="tempe" name="temp" required>
                    </div>
                    
                </div>
</div>

<div class="col-md-12 form-group">
	<label for="MedicoTratante">Médico tratante</label>
                        <input type="text" class="form-control" id="meditratan" name="medicoTratante" required>
</div>

  
 -->



</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script> -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/popper.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

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
  <script src="libreriasJS/bootstrap.min.js"></script>
  <script src="libreriasJS/bootstrapValidator.js"></script>
  <script src="js/ficha_identificacion.js"></script>


</body>

</html>