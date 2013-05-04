<div id="buscadorHeader" class="wrapper">

						<select name="categoria" id="">
						<?php 	while ( $r = mysql_fetch_object($query) ) { 	?>						
							
							<option value=" <?php  echo $r->id; ?> "> <?php echo $r->nom_categoria; ?> </option>
						
						<?php } ?>

						</select>

						<input placeholder="Buscar Miembro"id="Buscar"type="text">
					
						<button id="buscarPropiedad">Buscar</button>
					</div>