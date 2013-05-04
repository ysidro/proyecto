<?php 

	include "../../fn/motor.php";


	//capturando datos del formulario ======================================
	$nom_categoria 	= mysql_real_escape_string(trim($_POST['nom_categoria']));
	
	// valido por PHP el formulario

	//Validadndo insertar valor categoria a marca ==========================
	if($nom_categoria == ""){
			header('location:' . $_SERVER['HTTP_REFERER'] . '?error=InsertarCategoria' );
	}else{

	// Invoco mi conección ================================================
	$x = coneccion();
	// Preparo mi consulta SQL ============================================
	$sql = "INSERT INTO 
				categoria (nom_categoria) 
			VALUES 
				('".$nom_categoria."')"; 

	// Inserto los datos ==================================================
		$insert = mysql_query($sql); 

	// Valido que todo sea insertado sin problemas ========================
		if($insert){
			
				header("location: " . $_SERVER['HTTP_REFERER']);
	
		};

		echo "Hay problemas " . mysql_error();
	}
 ?>