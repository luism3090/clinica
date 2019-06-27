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
 

 if($num_interior == "")
{
	$num_interior = " null ";
}
else{
	$num_interior = " '".addslashes($num_interior)."' ";
}

 if($tel_casa == "")
{
	$tel_casa = " null ";
}
else{
	$tel_casa = " ".addslashes($tel_casa)." ";
}


try
{

		// inicializando la transacción 

		mysqli_begin_transaction($conexion, MYSQLI_TRANS_START_READ_WRITE);


		// insertando datos en la tabla de ficha_identificacion

		 $query = " insert into ficha_identificacion 
		 											(
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
		 											values (
		 													NOW(),
		 													'".addslashes($tipo_interrogatorio)."',
		 													'".addslashes($nombre_acompanante)."',
		 													'".addslashes($ape_paterno_acompanante)."',
		 													'".addslashes($ape_materno_acompanante)."',
		 													'".addslashes($parentesco_acompanante)."',
		 													'".addslashes($estado_civil)."',
		 													'".addslashes($lugar_origen)."',
		 													'".addslashes($localidad_residencia)."',
		 													'".addslashes($municipio_residencia)."',
		 													'".addslashes($estado_residencia)."',
		 													'".addslashes($colonia_residencia)."',
		 													'".addslashes($calle_residencia)."',
		 													'".addslashes($num_exterior)."',
		 													 ".$num_interior.",
		 													'".addslashes($escolaridad)."',
		 													'".addslashes($carrera)."',
		 													'".addslashes($ocupacion)."',
		 													'".addslashes($religion)."',
		 													'".addslashes($tel_movil)."',
		 													 ".$tel_casa.",
		 													'".addslashes($correo_electronico)."',
		 													 ".addslashes($id_medico).",
		 													 ".addslashes($id_enfermera)."
		 													)"; 

		$resul = mysqli_query($conexion,$query);

		if($resul==false)
	    {	
	    	$msjError = mysqli_error($conexion);
	        throw new Exception();
	    }

		$num_ficha = mysqli_insert_id($conexion);  // recuperando el ultimo id autoincremental del campo llamado num_ficha tabla ficha_identificacion


		 // insertando datos en tabla de pacientes

		$query = " insert into pacientes 
										(id_paciente,
										 nombre,
										 ape_paterno,
										 ape_materno,
										 genero,
										 fecha_nacimiento,
										 edad,
										 num_ficha
										) 
										values ('".addslashes($id_paciente)."',
												'".addslashes($nombre)."',
												'".addslashes($ape_paterno)."',
												'".addslashes($ape_materno)."',
												'".addslashes($genero)."',
												'".addslashes($fecha_nacimiento)."',
												'".addslashes($edad)."',
												 ".addslashes($num_ficha)."
												)";

		$resul = mysqli_query($conexion,$query);
		if($resul==false)
	    {
	    	$msjError = mysqli_error($conexion);
	        throw new Exception();
	    }


	    // insertando datos en tabla  signos_vitales

	    $query = " insert into signos_vitales 
					 											(id_signos_vitales,
					 											 peso,
					 											 talla,
					 											 IMC,
					 											 tension_arterial,
					 											 FC,
					 											 FR,
					 											 abdomen,
					 											 cadera,
					 											 ICC,
					 											 SpO2,
					 											 GLIC,
					 											 Temperatura,
					 											 num_ficha
					 											) 
					 											values (null,
					 													'".addslashes($peso)."',
					 													'".addslashes($talla)."',
					 													'".addslashes($IMC)."',
					 													'".addslashes($tension_arterial)."',
					 													'".addslashes($FC)."',
					 													'".addslashes($FR)."',
					 													'".addslashes($abdomen)."',
					 													'".addslashes($cadera)."',
					 													'".addslashes($ICC)."',
					 													'".addslashes($SpO2)."',
					 													'".addslashes($GLIC)."',
					 													'".addslashes($Temperatura)."',
					 													 ".addslashes($num_ficha)."
					 													)";


		$resul = mysqli_query($conexion,$query);
		if($resul==false)
	    {
	    	$msjError = mysqli_error($conexion);
	        throw new Exception();
	    }


		// ejecutando el commit de las consultas mysql
		mysqli_commit($conexion); 

		$resultado_query = array(
												'error'=> false,
				 								'registros'=> 0,
												'resultado'=> "Numero de ficha creado --> ".$num_ficha,
												'mensaje'=>'La ficha de identificación del paciente ha sido guardada correctamente'
											);

		echo json_encode($resultado_query);


}
catch(Exception $e){

	
	// ejecutando el rollback de las consultas mysql
	mysqli_rollback($conexion); 
	

	$resultado_query = array(
							'error'=> true,
							'registros'=> 0,
							'resultado'=> $msjError,
							'mensaje'=>'Ocurrió un error a la hora de guardar los datos favor de contactar al programador'
						);

    echo json_encode($resultado_query);


}

exit();


	// $query = " insert into ficha_identificacion 
	//  											(
	//  											 fecha_hora_elaboracion,
	//  											 tipo_interrogatorio,
	//  											 nombre_acompanante,
	//  											 ape_paterno_acompanante,
	//  											 ape_materno_acompanante,
	//  											 parentesco_acompanante,
	//  											 estado_civil,
	//  											 lugar_origen,
	//  											 localidad_residencia,
	//  											 municipio_residencia,
	//  											 estado_residencia,
	//  											 colonia_residencia,
	//  											 calle_residencia,
	//  											 num_exterior,
	//  											 num_interior,
	//  											 escolaridad,
	//  											 carrera,
	//  											 ocupacion,
	//  											 religion,
	//  											 tel_movil,
	//  											 tel_casa,
	//  											 correo_electronico,
	//  											 id_medico,
	//  											 id_enfermera
	//  											) 
	//  											values (
	//  													NOW(),
	//  													'".$tipo_interrogatorio."',
	//  													'".$nombre_acompanante."',
	//  													'".$ape_paterno_acompanante."',
	//  													'".$ape_materno_acompanante."',
	//  													'".$parentesco_acompanante."',
	//  													'".$estado_civil."',
	//  													'".$lugar_origen."',
	//  													'".$localidad_residencia."',
	//  													'".$municipio_residencia."',
	//  													'".$estado_residencia."',
	//  													'".$colonia_residencia."',
	//  													'".$calle_residencia."',
	//  													'".$num_exterior."',
	//  													".$num_interior.",
	//  													'".$escolaridad."',
	//  													'".$carrera."',
	//  													'".$ocupacion."',
	//  													'".$religion."',
	//  													'".$tel_movil."',
	//  													".$tel_casa.",
	//  													'".$correo_electronico."',
	//  													".$id_medico.",
	//  													".$id_enfermera."
	//  													)"; 

	// $resul = mysqli_query($conexion,$query);

	// if($resul)
	// {

	//     $query = "select max(num_ficha) as num_ficha from ficha_identificacion";

	// 	$resul = mysqli_query($conexion,$query);

	// 	if($resul)
	// 	{

	// 			$num_ficha = '';

	// 			$registros = mysqli_num_rows($resul);

	// 			if($registros>0)
	// 			{

	// 					while ($row = mysqli_fetch_array($resul))
	// 					{

	// 				 		$num_ficha=$row['num_ficha'];
					 		
	// 				 	}


	// 			 		$query = " insert into pacientes 
	// 		 											(id_paciente,
	// 		 											 nombre,
	// 		 											 ape_paterno,
	// 		 											 ape_materno,
	// 		 											 genero,
	// 		 											 fecha_nacimiento,
	// 		 											 edad,
	// 		 											 num_ficha
	// 		 											) 
	// 		 											values ('".$id_paciente."',
	// 		 													'".$nombre."',
	// 		 													'".$ape_paterno."',
	// 		 													'".$ape_materno."',
	// 		 													'".$genero."',
	// 		 													'".$fecha_nacimiento."',
	// 		 													'".$edad."',
	// 		 													".$num_ficha."
	// 		 													)";

	// 		 			$resul = mysqli_query($conexion,$query);

	// 		 			if($resul)
	// 					{

	// 					 		$query = " insert into signos_vitales 
	// 				 											(id_signos_vitales,
	// 				 											 peso,
	// 				 											 talla,
	// 				 											 IMC,
	// 				 											 tension_arterial,
	// 				 											 FC,
	// 				 											 FR,
	// 				 											 abdomen,
	// 				 											 cadera,
	// 				 											 ICC,
	// 				 											 SpO2,
	// 				 											 GLIC,
	// 				 											 Temperatura,
	// 				 											 num_ficha
	// 				 											) 
	// 				 											values (null,
	// 				 													'".$peso."',
	// 				 													'".$talla."',
	// 				 													'".$IMC."',
	// 				 													'".$tension_arterial."',
	// 				 													'".$FC."',
	// 				 													'".$FR."',
	// 				 													'".$abdomen."',
	// 				 													'".$cadera."',
	// 				 													'".$ICC."',
	// 				 													'".$SpO2."',
	// 				 													'".$GLIC."',
	// 				 													'".$Temperatura."',
	// 				 													".$num_ficha."
	// 				 													)";


	// 				 			$resul = mysqli_query($conexion,$query);

	// 				 			if($resul)
	// 							{
	// 								$resultado_query = array(
	// 											'error'=> false,
	// 			 								'registros'=> 0,
	// 											'resultado'=> "Numero de ficha creado --> ".$num_ficha,
	// 											'mensaje'=>'La ficha de identificación del paciente ha sido guardada correctamente'
	// 										);

	// 							    echo json_encode($resultado_query);
	// 							}
	// 							else{

	// 								$resultado_query = array(
	// 											'error'=> true,
	// 			 								'registros'=> 0,
	// 											'resultado'=> mysqli_error($conexion),
	// 											'mensaje'=>'Ocurrió un error a la hora de guardar los datos favor de contactar al programador'
	// 										);

	// 							    echo json_encode($resultado_query);

	// 							}





	// 					}
	// 					else{

	// 						$resultado_query = array(
	// 									'error'=> true,
	// 	 								'registros'=> 0,
	// 									'resultado'=> mysqli_error($conexion),
	// 									'mensaje'=>'Ocurrió un error en la base de datos favor de contactar al programador'
	// 								);

	// 					    echo json_encode($resultado_query);

	// 					} 



	// 			}
	// 	}
		

	// }
	// else{

	// 	$resultado_query = array(
	// 									'error'=> true,
	// 	 								'registros'=> 0,
	// 									'resultado'=> mysqli_error($conexion),
	// 									'mensaje'=>'Ocurrió un error en la base de datos favor de contactar al programador'
	// 								);

	// 	echo json_encode($resultado_query);
	// }




?>
