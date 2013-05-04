<?php 

	include "../../fn/motor.php";

	//capturando datos del formulario ====================================
	$id_cat = mysql_real_escape_string(trim($_POST['id_cat']));
	$marca 	= mysql_real_escape_string(trim($_POST['nomb_marca']));

	// valido por PHP el formulario ======================================

	//Validadndo insertar valor categoria a marca ------------------------
	if(!$id_cat == ""){
			
		//Validando insertar valor marca =================================
		if(!$marca == ""){
			
			//Invoco Conección -------------------------------------------
			$x = coneccion();
			//Consulta SQL -----------------------------------------------
			$sqlm = "INSERT INTO 
						marca (id_cat, nomb_marca) 
					VALUES 
						('".$id_cat."','".$marca."')"; 

			//Inserto todos los datos ====================================	
			$insert = mysql_query($sqlm);
			
			//Valido que todo esta Bien ==================================
			if($insert){
						
						header("location: " . $_SERVER['HTTP_REFERER']);

			};
			
			echo "Hay problemas " . mysql_error();
				
		}else{
			header('location:' . $_SERVER['HTTP_REFERER'] . '?error=InsertarCategoria' );
		}

	}else{
		header('location:' . $_SERVER['HTTP_REFERER'] . '?error=asignarCateogriaMarca' );
	}

 ?>