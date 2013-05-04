<?php 

	include "../../fn/motor.php";

	$x = coneccion();
	$deletMarc = mysql_real_escape_string($_GET['id']);
	$sql = "DELETE FROM marca WHERE id ='".$deletMarc."'"; 

		$insert = mysql_query($sql); 
		if($insert){
					
				header("location: " . $_SERVER['HTTP_REFERER']);

			};

		echo "<div class='alert-error'>Hay problemas <br />" . mysql_error() . "</div>";
	


 ?>