<?php 
include 'conexion.php';

$id_paciente= $_POST['id_paciente'];

//Sentencia SQL para buscar un usuario con esos datos 
$query = "select 
				paci.id_paciente,
				paci.nombre,
		        paci.ape_paterno,
		        paci.ape_materno,
		        genero,
		        fecha_nacimiento,
				edad,
		        ficha.num_ficha, 
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
		        id_signos_vitales, 
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
		        Temperatura
		from ficha_identificacion ficha
		join pacientes paci on (ficha.num_ficha = paci.num_ficha)
		join signos_vitales sigv on (ficha.num_ficha = sigv.num_ficha)
		where paci.id_paciente = '".$id_paciente."'"; 



$resul = mysqli_query($conexion,$query); 




if($resul){

	  $registros = mysqli_num_rows($resul);


	 if($registros>0){

		 	while ($row = mysqli_fetch_array($resul)){

		 		$datosFicha = array(
		 								'id_paciente' => $row['id_paciente'],
		 								'nombre' => $row['nombre'],
		 								'ape_paterno' => $row['ape_paterno'],
								        'ape_materno'=> $row['ape_materno'],
								        'genero'=> $row['genero'],
								        'fecha_nacimiento' => $row['fecha_nacimiento'],
										'edad' => $row['edad'],
								        'num_ficha' => $row['num_ficha'], 
								        'fecha_hora_elaboracion' => $row['fecha_hora_elaboracion'], 
								        'tipo_interrogatorio' => $row['tipo_interrogatorio'], 
								        'nombre_acompanante' => $row['nombre_acompanante'], 
								        'ape_paterno_acompanante' => $row['ape_paterno_acompanante'],
								        'ape_materno_acompanante'=> $row['ape_materno_acompanante'], 
								        'parentesco_acompanante'=> $row['parentesco_acompanante'], 
								        'estado_civil'=> $row['estado_civil'], 
								        'lugar_origen'=> $row['lugar_origen'], 
								        'localidad_residencia'=> $row['localidad_residencia'], 
								        'municipio_residencia'=> $row['municipio_residencia'], 
								        'estado_residencia'=> $row['estado_residencia'], 
								        'colonia_residencia'=> $row['colonia_residencia'], 
								        'calle_residencia'=> $row['calle_residencia'],  
								        'num_exterior'=> $row['num_exterior'],  
								        'num_interior'=> $row['num_interior'],  
								        'escolaridad'=> $row['escolaridad'],  
								        'carrera'=> $row['carrera'],  
								        'ocupacion'=> $row['ocupacion'],  
								        'religion'=> $row['religion'],  
								        'tel_movil'=> $row['tel_movil'],  
								        'tel_casa'=> $row['tel_casa'],  
								        'correo_electronico'=> $row['correo_electronico'],  
								        'id_medico'=> $row['id_medico'], 
								        'id_signos_vitales'=> $row['id_signos_vitales'],  
								        'peso'=> $row['peso'],  
								        'talla'=> $row['talla'],  
								        'IMC'=> $row['IMC'],  
								        'tension_arterial'=> $row['tension_arterial'],  
								        'FC'=> $row['FC'],  
								        'FR'=> $row['FR'],  
								        'abdomen'=> $row['abdomen'],  
								        'cadera'=> $row['cadera'],  
								        'ICC'=> $row['ICC'],  
								        'SpO2'=> $row['SpO2'],  
								        'GLIC'=> $row['GLIC'],  
								        'Temperatura' => $row['Temperatura'], 
		 							);
		 	}



	 		  	$resultado_query = array(
	 								'error'=> false,
	 								'registros'=> $registros,
									'datos'=> $datosFicha

								);

	 			echo json_encode($resultado_query);

	 }


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