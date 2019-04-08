<?php
include 'conexion.php';

	$query = "select 
					id_usuario as id_medico,
				    concat(nombre,' ',ape_paterno,' ',ape_materno) as medico
				from usuarios 
				where id_tipo_usuario = 2"; 

	

$resul = mysqli_query($conexion,$query); 


if($resul){


	  $registros = mysqli_num_rows($resul);


	 if($registros>0){


	 	$data = array();

		 	while ($row = mysqli_fetch_array($resul)){


				$nestedData=array('id_medico' => utf8_encode($row["id_medico"]),
								  'medico' =>utf8_encode($row["medico"]));

				$data[] = $nestedData;
				
				
		 	}

	 		  	$resultado_query = array(
	 								'error'=> false,
	 								'registros'=> 1,
									'resultado'=> $data

								);

	 			echo json_encode($resultado_query);


	 }
	 else{

	 	$resultado_query = array(
	 								'error'=> false,
	 								'registros'=> 0,
									'resultado'=>'Sin datos',
									'mensaje'=>'No se encontraron datos'
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