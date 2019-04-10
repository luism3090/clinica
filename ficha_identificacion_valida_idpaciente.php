<?php 

include 'conexion.php';

$id_paciente_new= $_POST['datos']["id_paciente_new"];
$id_paciente_ori= $_POST['datos']["id_paciente_ori"];


if($id_paciente_new == $id_paciente_ori)
{
	   $resultado_query = array(
	 								'error'=> false,
	 								'registros'=> 0,
									'resultado'=>'OK',
									'mensaje'=>'Todo ok'
								);

	 	echo json_encode($resultado_query);
}
else{
		$query = " select id_paciente from pacientes where '".$id_paciente_new."' = id_paciente "; 

		$resul = mysqli_query($conexion,$query); 

		if($resul){

			  $registros = mysqli_num_rows($resul);

			 if($registros>0){

			 		  	$resultado_query = array(
			 								'error'=> false,
			 								'registros'=> 1,
			 								'resultado'=>'no_disponible',
											'mensaje'=>'no disponible'

										);

			 			echo json_encode($resultado_query);


			 }
			 else{

			 	$resultado_query = array(
			 								'error'=> false,
			 								'registros'=> 0,
											'resultado'=>'OK',
											'mensaje'=>'Todo ok'
										);

			 	echo json_encode($resultado_query);
			 }

		}
		else{

			$resultado_query = array(
											'error'=> true,
			 								'registros'=> 0,
											'resultado'=> mysqli_error($conexion),
											'mensaje'=>'Ocurrió un error a la hora de validar, favor de contactar al programador'
										);

			echo json_encode($resultado_query);
		}

}





?>