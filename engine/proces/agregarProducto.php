<?php 

	include "../../fn/motor.php";

	//Capturando los datos del formulario ======================================================================
	
	$serie 		= mysql_real_escape_string(trim($_POST['serie']));
	$marcaid 	= mysql_real_escape_string(trim($_POST['marca_id']));
	$precio  	= mysql_real_escape_string(trim($_POST['precio']));
	$cantidad 	= mysql_real_escape_string(trim($_POST['cantidad']));
	$comentario = mysql_real_escape_string(trim($_POST['comentario']));

	//Validando los datos del formulario ======================================================================
	// Valido campo serie -------------------------------------------------------------------------------------	
		if (!$serie == "") {
	// Valido campo marca -------------------------------------------------------------------------------------
			if (!$marcaid == "") {
	// Valido campo precio ------------------------------------------------------------------------------------
				if (!$precio == "") {
	// Valido campo Cantidad ----------------------------------------------------------------------------------				
					if (!$cantidad == "") {
	// Valido campo comentario --------------------------------------------------------------------------------
						if (!$comentario == "") {

							// Invoco funcion conección ======================================================
							$x = coneccion();

							// Consulta SQL =================================================================	
							$sqlp = "INSERT INTO 
										producto (marca_id, precio, cantidad, comentario, serie) 
									VALUES 
										('".$marcaid."','".$precio."','".$cantidad."','".$comentario."','".$serie."')";		 
							// Valido la Consulta SQL =========================================================
							$insert = mysql_query($sqlp);
							if ($insert) {
											
								header("location: " . $_SERVER['HTTP_REFERER']);

							};
									
							echo "Hay problemas " . mysql_error();
							
						}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=comentario');}
					}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Cantidad');}	
				}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Precio');}
			}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Marca' );}
		}else{ header('location:' . $_SERVER['HTTP_REFERER'] . '?errorInsertarNuevoProducto=Serie' );}       

 ?>