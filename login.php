<?php 

include 'conexion.php';

$usuario= $_POST['datos']["usuario"];
$contrasena=$_POST['datos']["contrasena"];


// echo json_encode($usuario); 

// exit();


//Sentencia SQL para buscar un usuario con esos datos 
$query = " select * from usuarios where nombre_usuario ='".$usuario."' and password='".$contrasena."'"; 

//echo $query;

// exit();

//Ejecuto la sentencia 
$resul = mysqli_query($conexion,$query); 

if($resul){


	  $registros = mysqli_num_rows($resul);


	 if($registros>0){

		 	while ($row = mysqli_fetch_array($resul)){

		 		$id_tipo_usuario=$row['id_tipo_usuario'];
		 		$id_usuario=$row['id_usuario'];
		 		$nombre_usuario= $row['nombre']." ".$row['ape_paterno']." ".$row['ape_materno'];
		 	}


	 	      session_start(); 
	 	//      session_register("autentificado");

	 		  $_SESSION["id_tipo_usuario"]=$id_tipo_usuario;
	 		  $_SESSION["id_usuario"]=$id_usuario;
	 		  $_SESSION["nombre_usuario"]=$nombre_usuario;
	 		  


	 		  	$resultado_query = array(
	 								'error'=> false,
	 								'registros'=> 1,
									'id_tipo_usuario'=>$id_tipo_usuario,
									'id_usuario'=>$id_usuario,

								);

	 			echo json_encode($resultado_query);

	 	     //  if($id_tipo_usuario=='3'){
	 	     //  	header("Location: ficha.php");
	 	     //  }
	 	      
	 	     //  else if($id_tipo_usuario=='2') {
	 	     //  	header("Location: hiscli.php");
	 	     //  }
	 	     //  else if($id_tipo_usuario=='1') {

	 	     //  	header("Location: Registro.php"); 
	 	     //  }  
	 	     // else { 
	 	     //  //si no existe le mando otra vez a la portada 
	 	     //   header("Location: index.php?errorusuario=si"); 
	 	     // } 

	 }
	 else{

	 	$resultado_query = array(
	 								'error'=> false,
	 								'registros'=> 0,
									'resultado'=>'Sin datos',
									'mensaje'=>'El nombre de usuario o contraseña son incorrectos'
								);

	 	echo json_encode($resultado_query);

	 	
	 }


}
else{

	$resultado_query = array(
									'error'=> true,
	 								'registros'=> 0,
									'resultado'=> mysqli_error($conexion),
									'mensaje'=>'Ocurrió un error a la hora de ingresar favor de contactar al programador'
								);

	echo json_encode($resultado_query);
}





?>