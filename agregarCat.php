<?php 
	
	$url = "engine/forms";

	
	require "fn/motor.php";

if ( superPoderes() ){
	tmp(template,header);
	tmp($url,registrar_categoria);
	tmp(template,footer);
}else{ header("location:index.php"); }
 ?> 
