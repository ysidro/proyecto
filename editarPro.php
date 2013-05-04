<?php 
	$url = "engine/forms";

	
	require "fn/motor.php";

if ( superPoderes() ){
	tmp(template,header);
	tmp($url,editar_productos);
	tmp(template,footer);
}else{ header("location:index.php"); }
 ?> 
