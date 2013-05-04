<?php 

	include "../../fn/motor.php";


	//Capturando los datos del formulario ======================================================================
	$id      	= mysql_real_escape_string($_POST['id']);
	$marcaid 	= mysql_real_escape_string(trim($_POST['marca_id']));
	$serie  	= mysql_real_escape_string(trim($_POST['serie']));
	$precio  	= mysql_real_escape_string(trim($_POST['precio']));
	$cantidad 	= mysql_real_escape_string(trim($_POST['cantidad']));
	$comentario = mysql_real_escape_string(trim($_POST['comentario']));



	//Validando los datos del formulario ======================================================================
	
	if (!$marcaid == "") {
				
				if (!$precio == "") {
			
					if (!$cantidad == "") {
				
						if (!$comentario == "") {
		
							//Invoco la conección ====================================================================================
							$x = coneccion();
							
							// Consulta SQL ==========================================================================================
							$sql = " UPDATE producto SET 
							marca_id =	'" . $marcaid . "', 
							serie = '" . $serie . "', 
							precio = '" . $precio . "', 
							cantidad = '" . $cantidad . "', 
							comentario =  '" . $comentario . "' 
							WHERE id =   '" . $id . "'";		 
							
							// Inserto los datos =====================================================================================
								$insert = mysql_query($sql); 
							
							// Verifico que la sentecia SQL este Bien ----------------------------------------------------------------
								
								if ($insert) {
									
										header("location: " . $_SERVER['HTTP_REFERER']);

								};
								
								echo "Hay problemas " . mysql_error();

						}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Comentario' );}
					}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Cantidad' );}	
				}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Precio' );}
	}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Marca' );}
			
	
 ?>