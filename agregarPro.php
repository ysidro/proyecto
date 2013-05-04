<?php 
	
	$url = "engine/forms";

	
	require "fn/motor.php";
if ( superPoderes() ){
	tmp(template,header);
	tmp($url,registrar_producto);
	tmp(template,footer);
}else{ header("location:index.php"); }

 ?> 
