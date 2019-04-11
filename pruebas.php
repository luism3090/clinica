<?php
	session_start(); 
	echo $_SESSION["id_tipo_usuario"]."<br>";
	 echo $_SESSION["id_usuario"]."<br>";
	 echo $_SESSION["nombre_usuario"]."<br>";

	 echo isset($_SESSION["id_tipo_usuario"]);

?>