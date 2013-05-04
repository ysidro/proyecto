<?php
	$referencia = $_SERVER['HTTP_REFERER'];
	

	if (count($_POST) == 2) {
		foreach($_POST as $k => $v) {
			if (empty($v)) {
				header("Location: " . $referencia ."TENGOsuperPODERES");
				exit;
			}
		}
		

		$id = mysql_real_escape_string($_POST['id']);
		$cantidad = mysql_real_escape_string($_POST['cantidad']);
		
		require_once "../../fn/motor.php";
		
		$x = coneccion();	
		
		$sql="SELECT  * FROM producto AS p
				JOIN marca AS m      ON   p.marca_id = m.id
				JOIN categoria AS c  ON   m.id_cat = c.id
				WHERE p.id = '".$id."' AND cantidad >= '".$cantidad."'";

		// $sql = "SELECT * FROM producto WHERE id = '".$id."' AND cantidad >= '".$cantidad."'";
		
		$query = mysql_query($sql);
		
		if (mysql_num_rows($query)) {
			
			$producto = mysql_fetch_object($query);
			
			session_start();
				
			if (isset($_SESSION['carrito'][$producto->id])) {
					
					$_SESSION['carrito'][$producto->id]['cantidad'] += $cantidad;
				
			} else {
					
					$_SESSION['carrito'][$producto->id] = array(
						'nombre'	=> $producto->serie,
						'precio'	=> $producto->precio,
						'cantidad'	=> $cantidad
					);
			}
			
			session_write_close();
		}
	}
	
	header("Location: " . $referencia);

?>