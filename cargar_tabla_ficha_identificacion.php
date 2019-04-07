<?php 

include 'conexion.php';


// echo $_REQUEST;

//  echo json_encode($_REQUEST);


// exit();



		$requestData= $_REQUEST;

					$columna = $requestData['order'][0]["column"]+1;
					$ordenacion = $requestData['order'][0]["dir"];
					
					$sqlPacientesficha =	"select 
													paci.id_paciente as rfc,
													concat(paci.nombre,' ',paci.ape_paterno,' ',paci.ape_materno) as paciente,
													edad as edad,
													fecha_hora_elaboracion as fecha,
													municipio_residencia as municipio,
													calle_residencia as direccion,
													tel_casa as telefono_casa,
													tel_movil as telefono_movil,
													concat(usu.nombre,' ',usu.ape_paterno,' ',usu.ape_materno) as medico,
													'<button  type=''button'' class=''btn btn-primary btn btnFichaPaciente''> <span class=''glyphicon glyphicon-pencil''></span> </button>' as historia
												from ficha_identificacion ficha 
												join pacientes paci on (ficha.num_ficha = paci.num_ficha)
												join usuarios usu on (ficha.id_medico = usu.id_usuario)
											order by ".$columna." ".$ordenacion." ";

					

					//$query1 = $this->db->query($sql1,array($id_usuario));
					//$query = $this->db->query($sqlEstudiantesKardex);

					$query = mysqli_query($conexion,$sqlPacientesficha); 

					//$this->db->query($sql, array(array(3, 6), 'live', 'Rick') );

					$totalData =  mysqli_num_rows($query);
					$totalFiltered = $totalData;

					if( !empty($requestData['search']['value']) ) 
					{   

						$sqlPacientesficha = "select
													rfc,
												    paciente,
												    edad,
												    fecha,
												    municipio,
												    direccion,
												    telefono_casa,
												    telefono_movil,
												    medico,
												    historia
												From(
													select 
														paci.id_paciente as rfc,
														concat(paci.nombre,' ',paci.ape_paterno,' ',paci.ape_materno) as paciente,
														edad as edad,
														fecha_hora_elaboracion as fecha,
														municipio_residencia as municipio,
														calle_residencia as direccion,
														tel_casa as telefono_casa,
														tel_movil as telefono_movil,
														concat(usu.nombre,' ',usu.ape_paterno,' ',usu.ape_materno) as medico,
														'<button  type=''button'' class=''btn btn-primary btn btnFichaPaciente''> <span class=''glyphicon glyphicon-pencil''></span> </button>' as historia
													from ficha_identificacion ficha 
													join pacientes paci on (ficha.num_ficha = paci.num_ficha)
													join usuarios usu on (ficha.id_medico = usu.id_usuario)
												) as mytable
												where  
													 ( 
														 rfc like '%".$requestData['search']['value']."%' or  
														 paciente like '%".$requestData['search']['value']."%' or 
														 edad like '%".$requestData['search']['value']."%' or 
														 fecha like '%".$requestData['search']['value']."%' or 
														 municipio like '%".$requestData['search']['value']."%' or 
														 direccion like '%".$requestData['search']['value']."%' or 
														 telefono_casa like '%".$requestData['search']['value']."%' or
														 telefono_movil like '%".$requestData['search']['value']."%' or 
														 medico like '%".$requestData['search']['value']."%'
												     ) order by ".$columna." ".$ordenacion." ";

												     	// rfc like '%".$this->db->escape_str($requestData['search']['value'])."%' or  
					

						// $query = $this->db->query($sqlEstudiantesKardex);
						$query = mysqli_query($conexion,$sqlPacientesficha); 


						// $totalFiltered = $query->num_rows(); 
						$totalFiltered = mysqli_num_rows($query);
						

					}

					// $limit = " LIMIT ".escape_str($requestData['start'])." ,".escape_str($requestData['length'])." ";
					$limit = " LIMIT ".$requestData['start']." ,".$requestData['length']." ";
		            $sqlPacientesficha .= $limit;
		                
		            // $query = $this->db->query($sqlEstudiantesKardex);
		            $query = mysqli_query($conexion,$sqlPacientesficha); 

		            $data = array();

		            		//$row = mysqli_fetch_array($resul)

							//foreach ($query->result_array() as $row)
							while ($row = mysqli_fetch_array($query))
							{ 
								$nestedData=array(	$row["rfc"],
													$row["paciente"],
													$row["edad"],
													$row["fecha"],
													$row["municipio"],
													$row["direccion"],
													$row["telefono_casa"],
													$row["telefono_movil"],
													$row["medico"],
													$row["historia"]
												 );

								$data[] = $nestedData;

							}

				$json_data = array(
					"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
					"recordsTotal"    => intval( $totalData ),  // total number of records
					"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
					"data"            => $data  // total data array
					);

				

	           echo json_encode($json_data);

	 
	
?>