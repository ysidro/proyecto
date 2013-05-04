<?php 
//Recojo los datos que me pasan desde el formulario
//------------------------
	$nombre 	= mysql_real_escape_string(trim($_POST["nombre"]));
	$apellido	= mysql_real_escape_string(trim($_POST["apellido"]));
	$email		= mysql_real_escape_string(trim($_POST["email"]));
	$rEmail		= mysql_real_escape_string(trim($_POST["rep-email"]));
	$password	= mysql_real_escape_string(trim($_POST["password"]));
	$sexo		= mysql_real_escape_string(trim($_POST["sexo"]));
	$dia		= mysql_real_escape_string(trim($_POST["dia"]));
	$mes		= mysql_real_escape_string(trim($_POST["mes"]));
	$anio		= mysql_real_escape_string(trim($_POST["anio"]));
//---------------------------------------------------------------
	$fecha		= $anio . $mes . $dia;
//Valido que no tenga ningun campo vasio
	if(!$nombre == ""){
		if(!$apellido == ""){
			if(!$email == ""){
				
					if(!$sexo == ""){
						if(!$password == ""){
							if(!$dia == ""){
								if(!$mes == ""){
									if(!$anio == ""){
									//----------------------------------------------------------
											$x = coneccion();
									// Consulta ------------------------------------------------
										$sql="INSERT INTO usuario  (nombre, apellido, email, clave, fecha, sexo) 
											 VALUES ('" . $nombre . "','" . $apellido . "','" . $email . "','" . md5($password) . "','" . $fecha . "','" . $sexo . "')";
									// query ---------------------------------------------------
										$query = mysql_query($sql);
									// valido la consulta de los datos -------------------------
										if($query){
											header("location: index.php");
										}else{
											echo"no se a podido agergar nuevo usuario" . mysql_error();
											
										};
									// --------------------------------------------------------------
									}else{
										header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=Anio');
										//Anio =====================================================
									}
								}else{
									header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=Mes');

								}	
							}else{
								header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=dia');
								//Dia =======================================================
							}	
						}else{
							header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=password');
							//Password =================================================
						}	
					}else{
						header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=sexo');
						//Sexo =====================================================
						}
			}else{
				header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=email');
				//Email ====================================================
				
				}
		}else{
			header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=apellido');
			//Apellido =================================================
		}
	}else{
		header('location:' . $_SERVER['HTTP_REFERER'] . '?errorRegistarUSER=Nombre');
		//Nombre ===================================================
		
		}

 ?>