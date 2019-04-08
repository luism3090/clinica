<?php
include 'conexion.php';

$ficha = $_POST['datosFichaIdentificacion'];
$paciente = $_POST['datosPaciente'];

 //var_dump($dato1);

 $fecha_hora_elaboracion = $ficha["fecha_hora_elaboracion"]; 
 $tipo_interrogatorio = $ficha["tipo_interrogatorio"]; 
 $nombre_acompanante = $ficha["nombre_acompanante"]; 
 $ape_paterno_acompanante = $ficha["ape_paterno_acompanante"]; 
 $ape_materno_acompanante = $ficha["ape_materno_acompanante"]; 
 $parentesco_acompanante = $ficha["parentesco_acompanante"]; 
 $estado_civil = $ficha["estado_civil"]; 
 $lugar_origen = $ficha["lugar_origen"]; 
 $localidad_residencia = $ficha["localidad_residencia"]; 
 $municipio_residencia = $ficha["municipio_residencia"]; 
 $estado_residencia = $ficha["estado_residencia"]; 
 $colonia_residencia = $ficha["colonia_residencia"]; 
 $calle_residencia = $ficha["calle_residencia"]; 
 $num_exterior = $ficha["num_exterior"]; 
 $num_interior = $ficha["num_interior"]; 
 $escolaridad = $ficha["escolaridad"]; 
 $carrera = $ficha["carrera"]; 
 $ocupacion = $ficha["ocupacion"]; 
 $religion = $ficha["religion"]; 
 $tel_movil = $ficha["tel_movil"]; 
 $tel_casa = $ficha["tel_casa"]; 
 $correo_electronico = $ficha["correo_electronico"]; 



 $nombre = $paciente["nombre"]; 
 $ape_paterno = $paciente["ape_paterno"]; 
 $ape_materno = $paciente["ape_materno"]; 
 $genero = $paciente["genero"]; 
 $fecha_nacimiento = $paciente["fecha_nacimiento"]; 
 $edad = $paciente["edad"]; 



 $query = " insert into ficha_identificacion 
 											(num_ficha,
 											 fecha_hora_elaboracion,
 											 tipo_interrogatorio,
 											 nombre_acompanante,
 											 ape_paterno_acompanante,
 											 ape_materno_acompanante,
 											 parentesco_acompanante,
 											 estado_civil,
 											 lugar_origen,
 											 localidad_residencia,
 											 municipio_residencia,
 											 estado_residencia,
 											 colonia_residencia,
 											 calle_residencia,
 											 num_exterior,
 											 num_interior,
 											 escolaridad,
 											 carrera,
 											 ocupacion,
 											 religion,
 											 tel_movil,
 											 tel_casa,
 											 correo_electronico,
 											 id_medico,
 											 id_enfermera
 											) 
 											values (null,
 													NOW(),
 													'".$nombre_acompanante."',
 													'".$ape_paterno_acompanante."',
 													'".$ape_materno_acompanante."',
 													'".$parentesco_acompanante."',
 													'".$estado_civil."',
 													'".$lugar_origen."',
 													'".$localidad_residencia."',
 													'".$municipio_residencia."',
 													'".$estado_residencia."',
 													'".$colonia_residencia."',
 													'".$calle_residencia."',
 													'".$num_exterior."',
 													'".$num_interior."',
 													'".$escolaridad."',
 													'".$carrera."',
 													'".$ocupacion."',
 													'".$religion."',
 													".$tel_movil.",
 													".$tel_casa.",
 													'".$correo_electronico."'
 													)
 											"; 


// echo $dato2;



?>
