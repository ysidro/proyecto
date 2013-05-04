<?php 

include "../../fn/motor.php";
	
	//Verifico que me este llegando algun dato por POST
	if(!isset($_POST["email"]) || !isset($_POST["password"])){
		header('location:' . $_SERVER['HTTP_REFERER'] . '?errorLogin=FaltanDatos');

	}else{

		//Almaceno los datos en una variable
		$email = mysql_escape_string(trim($_POST["email"]));
		$password = mysql_escape_string(trim($_POST["password"]));
		
		//compruevo que los campos no este vacios 
		if( !$email == "" ){
			if( !$password == ""){
				
				// Mi consulta a la base datos
				$sql = "SELECT * FROM usuario WHERE email = '" . $email . "'";
				
				// Conecto a la base de datos
				$x = coneccion();
				
				// Verifico que la consulta este bien.
				if (!$query = mysql_query($sql)) {
					
					header('location:' . $_SERVER['HTTP_REFERER'] . '?errorCONEXION');
				
				}else {

					// hago un conteo en la base de datos
					if (mysql_num_rows($query) !=1 ){
				
						header('location:' . $_SERVER['HTTP_REFERER'] . '?errorLogin=UsarioNOExiste');
					
					}else{
					
						// llamo los datos por object
						$exist = mysql_fetch_object($query);
				
						// Verifico si el password es el mismo
						if ($exist->clave != md5($password)) {

							header('location:' . $_SERVER['HTTP_REFERER'] . '?errorLogin=CalveNOExiste');		
							
						}else{
							//Todo esta correcto :D

							// Alamaceno en variables de SESSION los datos del usuario que se a logeado.
							$_SESSION["email"] = $exist->email;
							$_SESSION["nombre_usuario"] = $exist->nombre;
							$_SESSION["apellido_usuario"] = $exist->apellido;
							$_SESSION["nivel"] = $exist->nivel;
							session_write_close();
							// Redirijo al usuario ya logeado al index
							header("location:" .$_SERVER['HTTP_REFERER']);

						}
					}
				}			

			}else{
				
				header('location:' . $_SERVER['HTTP_REFERER'] . '?errorLogin=FaltanPASSWORD');}
		}else{
				
				header('location:' . $_SERVER['HTTP_REFERER'] . '?errorLogin=FaltanEMAIL');}
	}

 ?>