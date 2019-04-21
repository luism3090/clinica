<?php
	// session_start(); 
	// echo $_SESSION["id_tipo_usuario"]."<br>";
	//  echo $_SESSION["id_usuario"]."<br>";
	//  echo $_SESSION["nombre_usuario"]."<br>";

	//  echo isset($_SESSION["id_tipo_usuario"]);

	$tel_casa="";
	// $tel_casa="null";
	$correo_electronico = "aaaa@hotmail.com";

	 // "". $tel_casa = ($tel_casa == "") ? "null" : $tel_casa . "";
	$dato =  "". ($tel_casa = $tel_casa == "" ? 'null' : $tel_casa).",
	             '".$correo_electronico."' ";

	 echo $dato; 


?>