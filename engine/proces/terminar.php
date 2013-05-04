<?php
	require_once "../../fn/motor.php";
	
	$x = coneccion();	
	
	$referencia = $_SERVER['HTTP_REFERER'];
	
	if (count($_POST) == 3) {
		
		foreach($_POST as $k => $v) {
			if (empty($v)) {
				header("location: " . $referencia);
				exit;
			}
		}
		
		session_start();
			if (isset($_SESSION['carrito'])) {
				$carrito = $_SESSION['carrito'];
			} else {
				$carrito = false;
			}
		session_write_close();
		
		if ($carrito == false) {
			header("location: " . $referencia);
			exit;	
		}
		
		$subtotal = 0;
		$itebs = 0;
		$total = 0;
		
		foreach($carrito as $i => $p) {
			$total_precio = $p['cantidad'] * $p['precio'];
			$subtotal += $total_precio;
		}
		
		$itebs = $subtotal * .18;
		$total = $subtotal + $itebs;
		
		$sql = "
			INSERT INTO 
				pedidos 
			SET
				nombre = '".$_POST['nombre']."',
				email = '".$_POST['email']."',
				direccion = '".$_POST['direccion']."',
				subtotal = '".$subtotal."',
				itebs = '".$itebs."',
				total = '".$total."'
		";
		
		mysql_query($sql);
		
		$id = mysql_insert_id();
		
		foreach($carrito as $i => $p) {
			$sql = "
				INSERT INTO 
					detalles_pedidos 
				SET
					pedido_id = '".$id."',
					producto_id = '".$i."',
					precio = '".$p['precio']."',
					cantidad = '".$p['cantidad']."'
			";
			
			mysql_query($sql);
			
			$sql = NULL;
		}
	}
	
	echo "Su pedido esta en almacen";
?>