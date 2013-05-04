<?php 
	
		//Selecionar los datos para ver los productos que tengo...
	$sql = " SELECT  p.id,p.precio,p.serie,p.fecha,p.cantidad,p.comentario, m.nomb_marca,m.id_cat,nom_categoria
			
       FROM  producto AS p 
       JOIN marca AS m      ON   p.marca_id = m.id
       JOIN categoria AS c  ON   m.id_cat = c.id
	";

	$query = mysql_query($sql);
	while ($l = mysql_fetch_object($query)) {

 ?>
  
	<article class="catProducto span2-1">
			
		<div class="over">
			<!-- Atrapo la variable del id -->
		<?php if (eresMortal()){ ?>
			<form action="engine/proces/prosesar.php" method="post">	
		
			<input name="id" class="hiden" type="text" value=" <?php echo $l->id; ?> ">
			<input name="cantidad" class="span1"type="number" value="1" size="3">
			<input class="btn shop btn-success" type="submit" value="Agregar">
		
			</form>
		<?php } ?>
			<!-- Muestro el precio del producto -->
			<p ><strong> $ RD <?php echo $l->precio; ?> </strong></p>
			<!-- Muestro descripción del producto -->
			<p > <?php echo $l->comentario; ?> </p>
		
		</div>
		
		<img src="data/productos/camisa.png" width="100%" alt="<?php echo $l->nomb_marca; ?>">
		
		<p class="catDetail">
			<span class="catNombre"> <?php echo $l->nomb_marca . " " . $l->serie; ?> </span>
			<span class="catDescription"><?php echo $l->fecha; ?></span>
		</p>
	
</article>

<?php } ?>