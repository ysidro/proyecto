 
 
<div id="cat">
</div>

<div id="listmarca" class="span8_1">
		<h3>Marcas Existentes</h3>
		<ul>
		<li id="titele"> 
			<p class="span2">Marca </p> 
			<p class="span2"> Categoria</p> 
		</li>

	<?php 


	// $sql = " SELECT * FROM marca, categoria WHERE  marca.id_cat = categoria.id";
		$sql = "SELECT
						m.id, m.id_cat,m.nomb_marca ,c.nom_categoria
					FROM 	
						marca as m
					LEFT JOIN
						categoria as c	
					ON m.id_cat =  c.id

				";		
	$query = mysql_query($sql);
	while ($l = mysql_fetch_object($query)) {

	 ?>
		<li class="item"> 
			
			<p class="span2"><?php  echo $l->nomb_marca; ?> </p> 
			<p class="span2"> <?php echo $l->nom_categoria; ?></p> 
			<p class="span1"> <a class="icon-edit"href="engine/proces/editar_marca.php?id=<?php echo $l->id; ?>"></a> </p>
			<p class="span1"> <a class="icon-remove" href="engine/proces/eliminarMarca.php?id=<?php echo $l->id; ?>"></a> </p>
			
		</li>
<?php } ?>
	
		</ul>
</div>

<form action="engine/proces/agregarMarca.php" method="post">
	
	<div id="newCategoria" class="span4_5{">
			<h3>Agregar Producto</h3>
		<ul>
			<li>
				<label for="">Categoria</label>
				<select name="id_cat" id="categoria">
						<option value=""> - Selecione una Categoria - </option>

					<?php

						$sql = "SELECT * FROM categoria";
						$query = mysql_query($sql);

					 	while ( $r = mysql_fetch_object($query) ) { 	?>						
								
						<option value=" <?php  echo $r->id; ?> "> <?php echo $r->nom_categoria; ?> </option>
							
					<?php }  ?>

				</select>

			</li>

			<li>
				<label>Nueva Marca </label>
					<input type="text" name="nomb_marca" id="nomb_marca">

			</li>


			<li>
				<input class="btn newMarc"  type="submit" value="Agregar">
				<input class="btn"  type="reset" value="Borrar">
			</li>
		</ul>
	</div>

</form>
