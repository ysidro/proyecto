

<div id="cat">
</div>

<div id="listmarca" class="span8_1">
		<h3>Productos Existentes</h3>
		<ul>
		<li id="titele"> 
			<p class="span2">Marca </p> 
			<p class="span1"> Categoria</p> 
			<p class="span1"> Precio</p> 
			<p class="span1"> Cantidad</p> 
			<p class="span1"> Fecha</p> 
		</li>

	<?php 


/*	$sql = " SELECT * FROM marca,categoria where  marca.id_cat = categoria.id ";*/

	//Selecionar los datos para ver los productos que tengo...
	$sql = " SELECT  p.id,p.precio,p.serie,p.fecha,p.cantidad, m.nomb_marca,m.id_cat,c.nom_categoria
       FROM  producto AS p 
       JOIN marca AS m      ON   p.marca_id = m.id
       JOIN categoria AS c  ON   m.id_cat = c.id
	";

	$query = mysql_query($sql);
	while ($l = mysql_fetch_object($query)) {

	 ?>
		<li class="item"> 
			
			<p class="span2"><?php  echo $l->nomb_marca ." ". $l->serie ; ?> </p> 

			<p class="span1"> <?php echo $l->nom_categoria; ?></p> 
			<p class="span1"> $ <?php echo $l->precio;  ?></p> 
			<p class="span1"> <?php echo $l->cantidad; ?></p> 
			<p class="span1"> <?php echo $l->fecha; ?></p> 
			<p class="span1"> <a class="icon-edit "href="editarPro.php?id=<?php echo $l->id; ?>"></a> </p>
			<p class="span1"> <a class="icon-remove" href="engine/proces/eliminarProducto.php?id=<?php echo $l->id; ?>"></a> </p>
			
		</li>

	<?php  } ?>
		</ul>


</div>

		<?php 

			$idProduc = mysql_real_escape_string($_GET['id']);
				
			$sql = " SELECT  * FROM producto AS p
				JOIN marca AS m      ON   p.marca_id = m.id
				JOIN categoria AS c  ON   m.id_cat = c.id
				WHERE p.id ='". $idProduc ."'";
				
				$query = mysql_query($sql);
				$l = mysql_fetch_object($query)

				 ?>
<form action="engine/proces/editarProducto.php" method="post">
	<div id="newCategoria" class="span4_5{">
			<h3>Agregar Producto</h3>
		<ul>
			
			<li>
				<input type="text" class="hiden" name="id" value="<?php echo $idProduc; ?>">
				<label>Marca del Producto</label>
					<select name="marca_id" id="marca_id">
						<option value=""> <?php echo $l->nomb_marca ?> </option>
					<?php

						$sql = "SELECT * FROM marca";
						$query = mysql_query($sql);

					 	while ( $r = mysql_fetch_object($query) ) { ?>						
								
						<option value=" <?php  echo $r->id; ?> "> <?php echo $r->nomb_marca; ?> </option>
							
					<?php }  ?>

				</select>
				
			</li>
			<li>
				<label>Serie</label>
				<input type="text" name="serie" id="serie" value="<?php echo $l->serie; ?>">
			</li>
			<li>
				<label>Precio por C/U</label>
				
				<div class="input-prepend input-append">
  					<span class="add-on">$</span>
  					<input class="span2" id="appendedPrependedInput" value="<?php echo $l->precio; ?>" type="text" name="precio" class="precio">
 					<span class="add-on">.00</span>
				</div>
			</li>
			<li>
				<label>Cantidad</label>
				<input type="text" name="cantidad" id="cantidad" value=" <?php echo $l->cantidad; ?> ">
			</li>
			<li>
				<label>Descripción</label>
				<textarea name="comentario" id="comentario"  > <?php echo $l->comentario; ?> </textarea>
			</li>


			<li>
				<input class="btn newProd"  type="submit" value="Agregar">
				<input class="btn"  type="reset" value="Borrar">
			</li>
		</ul>
	</div>

</form>
