<?php
	if (count($_POST) == 2) {
		
		$id = (int) $_POST['id'];
		$cantidad = (int) $_POST['cantidad'];
		
		session_start();
			if ($cantidad == 0) {
				unset($_SESSION['carrito'][$id]);
			} else {
				$_SESSION['carrito'][$id]['cantidad'] = $cantidad;
			}
		session_write_close();
	}
	
	$referencia = $_SERVER['HTTP_REFERER'];
	
	header("Location: " . $referencia);
?>