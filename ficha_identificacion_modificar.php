<?php
include 'conexion.php';
session_start(); 

$ficha = $_POST['ficha_identificacion'];
$paciente = $_POST['pacientes'];
$signos_vitales = $_POST['signos_vitales'];

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
 $id_medico = $ficha["id_medico"];
 $id_enfermera = $_SESSION["id_usuario"];


 $id_paciente = $paciente["id_paciente"];
 $nombre = $paciente["nombre"]; 
 $ape_paterno = $paciente["ape_paterno"]; 
 $ape_materno = $paciente["ape_materno"]; 
 $genero = $paciente["genero"]; 
 $fecha_nacimiento = $paciente["fecha_nacimiento"]; 
 $edad = $paciente["edad"]; 

 $peso = $signos_vitales["peso"];
 $talla = $signos_vitales["talla"];
 $IMC = $signos_vitales["IMC"];
 $tension_arterial = $signos_vitales["tension_arterial"];
 $FC = $signos_vitales["FC"];
 $FR = $signos_vitales["FR"]; 
 $abdomen = $signos_vitales["abdomen"];
 $cadera = $signos_vitales["cadera"];
 $ICC = $signos_vitales["ICC"];
 $SpO2 = $signos_vitales["SpO2"];
 $GLIC = $signos_vitales["GLIC"];
 $Temperatura = $signos_vitales["Temperatura"];
 $num_ficha = $signos_vitales["num_ficha"];
 


 $query = " update ficha_identificacion  set 
 											 fecha_hora_elaboracion = '".$fecha_hora_elaboracion."',
 											 tipo_interrogatorio = '".$tipo_interrogatorio."',
 											 nombre_acompanante= '".$nombre_acompanante."',
 											 ape_paterno_acompanante= '".$ape_paterno_acompanante."',
 											 ape_materno_acompanante= '".$ape_materno_acompanante."',
 											 parentesco_acompanante= '".$parentesco_acompanante."',
 											 estado_civil= '".$estado_civil."',
 											 lugar_origen= '".$lugar_origen."',
 											 localidad_residencia= '".$localidad_residencia."',
 											 municipio_residencia= '".$municipio_residencia."',
 											 estado_residencia= '".$estado_residencia."',
 											 colonia_residencia= '".$colonia_residencia."',
 											 calle_residencia= '".$calle_residencia."',
 											 num_exterior= '".$num_exterior."',
 											 num_interior= '".$num_interior."',
 											 escolaridad= '".$escolaridad."',
 											 carrera= '".$carrera."',
 											 ocupacion= '".$ocupacion."',
 											 religion= '".$religion."',
 											 tel_movil= ".$tel_movil.",
 											 tel_casa= ".$tel_casa.",
 											 correo_electronico= '".$correo_electronico."',
 											 id_medico= '".$id_medico."',
 											 id_enfermera ='".$id_enfermera."'
 								where num_ficha = ".$num_ficha." "; 


$resul = mysqli_query($conexion,$query);

if($resul)
{

	$resultado_query = array(
									'error'=> false,
	 								'registros'=> 0,
									'resultado'=> mysqli_error($conexion),
									'mensaje'=>'ficha de identificación ha sido modificada correctamente'
								);

	echo json_encode($resultado_query);
	

}
else{

	$resultado_query = array(
									'error'=> true,
	 								'registros'=> 0,
									'resultado'=> mysqli_error($conexion),
									'mensaje'=>'Ocurrió un error en la base de datos'
								);

	echo json_encode($resultado_query);
}




?>
