<?php 
	
		require "fn/motor.php";
	
	
		$_SESSION["email"] = "";
		$_SESSION["nombre_usuario"] = "";
		$_SESSION["apellido_usuario"] = "";
		$_SESSION["nivel"] = "";

		$_SESSION  = array();
		
		session_destroy();

		header("location: index.php");    
 ?> 