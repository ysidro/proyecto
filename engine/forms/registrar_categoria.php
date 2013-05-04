


<!-- listado de categorias existentes ========================================================================== -->
<div id="listmarca" class="span8_1">
		<h3>Categorias Existentes</h3>
		<ul>
		<li id="titele"> 
			<p class="span3"> Categoria</p> 
		</li>

	<?php 

	//Selecionar los datos para ver los categorias que tengo...
	$sql = " SELECT * FROM categoria";

	$query = mysql_query($sql);
	while ($l = mysql_fetch_object($query)) {

	 ?>
		<li class="item"> 
			<p class="span3"> <?php echo $l->nom_categoria; ?></p> 
			<p class="span1"> <a class="icon-edit "href="engine/proces/editar_categoria.php?id=<?php echo $l->id; ?>"></a> </p>
			<p class="span1"> <a class="icon-remove" href="engine/proces/eliminarCategoria.php?id=<?php echo $l->id; ?>"></a> </p>
			
		</li>

	<?php  } ?>
		</ul>


</div>
<!-- Formulario par agergar categoria ========================================================================== -->
<form action="engine/proces/agregarCat.php" method="post">
	
	<div id="newCategoria" class="span4_5{">
			<h4>Nueva Categoria</h4>
		<ul>
			<li>
				<label for="">Categoria</label>
				<input type="text" name="nom_categoria" id="nom_categoria">
				
			</li>

			<li>
				<input class="btn newcat" type="submit" value="Agregar">
				<input class="btn" type="reset" value="Borrar">
			</li>
		</ul>
	</div>

</form>
