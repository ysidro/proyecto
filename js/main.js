
$(document).ready(function(){

//Menu foltante ===================================================================
	function menu(){

		//HTML del menu
		var html = '<nav id="menuPagechas">								\
				<ul >													\
					<li> 												\
						<a href="index.php" >Pagina inicio</a>			\
					</li>												\
					<li > 												\
						<a href="agregarCat.php" >Agregar categoria</a>	\
					</li>												\
					<li > 												\
						<a href="agregarPro.php" >Agregar Producto</a>	\
					</li>												\
					<li > 												\
						<a href="agregarMarc.php" >Agregar Marca</a>	\
					</li>												\
					</ul>												\
				<a href="#">Paginas Echas</a>							\
			</nav>';
			$('body').append(html);

		$("#menuPagechas ul").hide();	
		
		$("#menuPagechas a").click(function(){
			$("#menuPagechas ul").toggle("fade")
		});

	}

	//para el Hover del caltalogo ===================================================
	function over(){

		var p = $(".over");
		var html = $(".catProducto");

		$(html).hover(
			  function () { $(this).find(p).fadeIn(0);},
			  function () {	$(this).find(p).fadeOut(100);}
		);

	}

	//Funcion para Validar Formularios ===============================================
	function validCategoria(){
		
		$(".newcat").click(function(){
			
			$("alert-error").remove();
			if( $("#nom_categoria").val() == "" ){
				
				$("#nom_categoria").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			
			}
		});/*end click*/

		$("#nom_categoria").keyup(function(){
			if( $(this).val() != "" ){
				$("alert-error").fadeOut();			
				return false;
			}		
		});
	}
//Funcion para Validar  Marca --------------------------------------------------
	function validMarca(){
		
		$(".newMarc").click(function(){
			
			$("alert-error").remove();
			if( $("#nomb_marca").val() == "" ){
				
				$("#nomb_marca").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			
			}else if( $("#categoria").val() == "" ){
				
				$("#categoria").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			}
		
		});/*end click*/
		
		$("#categoria, #nomb_marca").keyup(function(){
		
			if( $(this).val() != "" ){
				$("alert-error").fadeOut();			
				return false;
			}		
		
		});
	}
//Funcion para Validar  Producto --------------------------------------------------

	function validProducto(){

		$(".newProd").click(function(){
			
			$("alert-error").remove();
			if( $("#marca_id").val() == "" ){
				
				$("#marca_id").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			
			}else if( $("#serie").val() == "" ){
				
				$("#serie").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			}else if( $("#appendedPrependedInput").val() == "" ){
				
				$("#appendedPrependedInput").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			}else if( $("#cantidad").val() == "" ){
				
				$("#cantidad").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			}else if( $("#comentario").val() == "" ){
				
				$("#comentario").focus().after("<span class='alert-error'>Ups!.. Olvidaste llenar este campo");
				return false;
			}
		
		});/*end click*/
		
		$("#serie, #marca_id, #appendedPrependedInput, #cantidad, #comentario").keyup(function(){
		
			if( $(this).val() != "" ){
				$("alert-error").fadeOut();			
				return false;
			}		
		
		});
	}
//Funcion para Eliminar pedido y articulos del carrito --------------------------------------------------

	

/* ==================== Llamando las funciones ===================================== */
	validMarca();
	validCategoria();
	validProducto()


	over();

/* end document ready*/});