<?php 
	session_start();
	function coneccion(){

		$serv = "localhost";
		$user = "yam";
		$pass = "control";
		$db	= "proyecto";

		$link = mysql_connect($serv, $user, $pass);
		if ($link) {
		 
		 	$db_s =	mysql_select_db($db, $link);
			if ($db_s) {
					/*echo 'Coneccion  Exitosa';*/
			}else{

				//si falla la selecion de la base de datos 
				die('No pudo conectarse con la base de datos: ' . mysql_error());
			
			};//seleciono la base de datos.

		}else{
			
				//si falla la coneccion 
				die('No pudo conectarse con el servidor: ' . mysql_error());
			
		};//conecto a la base de datos
	}//End coneccion




	function tmp($directorio, $file){

		$ruta = $directorio . "/" . $file . ".php";
		if (file_exists($ruta)) {
			
			include $ruta;

		}elseif (!file_exists($ruta)) {
			echo 	"<div class='text-error warning'>
						<strong>ADVERTENCIA.:</strong> El directorio <strong>" . $file . "</strong> no existe, comprueba las librerias...
					</div>";

		}else{
			echo 	"<div class='text-error error'>
						<strong>ERROR.:</strong> El Archivo <strong>" . $directorio . "</strong> no existe, comprueba las librerias...
					</div>";
		};

	}//End motor plantilla

	function subtmp($directorio, $subder, $file){

		$ruta = $directorio . "/" . $subder . "/" . $file . ".php";
		if (file_exists($ruta)) {
			
			include $ruta;

		}elseif (!file_exists($ruta)) {
			echo 	"<div class='text-error warning'>
						<strong>ADVERTENCIA.:</strong> El directorio <strong>" . $file . "</strong> no existe, comprueba las librerias...
					</div>";

		}else{
			echo 	"<div class='text-error error'>
						<strong>ERROR.:</strong> El Archivo <strong>" . $directorio . "</strong> no existe, comprueba las librerias...
					</div>";
		};

	}//End motor plantilla

	// creo la session
	function eresMortal(){

		// valido que las variables de session esten date_interval_create_from_date_string()
		if ( isset($_SESSION["nombre_usuario"]) && isset($_SESSION["apellido_usuario"]) && isset($_SESSION["email"])) {
			
			$usename 	 = $_SESSION["nombre_usuario"];
			$uselastname = $_SESSION["apellido_usuario"];
			return true;
		}else{
			return false;
		}
	}
	// creo la session
	function superPoderes(){

		// valido que las variables de session y les doy Super poderes
		if ( isset($_SESSION["nombre_usuario"]) && isset($_SESSION["apellido_usuario"]) && isset($_SESSION["email"]) && isset($_SESSION["nivel"]) &&  $_SESSION["nivel"] == 1 )  {
			
			return true;
		}else{
			return false;
		}
	}
 	
 	

 ?>