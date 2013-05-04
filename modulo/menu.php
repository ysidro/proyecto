<div class="navbar">

		<div class="container" style="width: auto;">
			
			
			<div class="nav-collapse">
				
				<ul class="nav pull-right">
					<?php 
					// Si Eres mortal solo veras esto
					if ( eresMortal() ){ ?>
					<li><a href="#vercarro">Ver Carrito</a> </li>
					<li><a href="salir.php"> <span class="icon-off"></span> Salir</a></li>
					
					<?php
					 // Si tienes super poderdes Eres Dios
					 if( superPoderes()){ 
					 ?>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Paginas <b class="caret"></b></a>
					
						<ul class="dropdown-menu">
							<li><a href="agregarCat.php">Categorías</a></li>
							<li><a href="agregarMarc.php">Marcas</a></li>
							<li><a href="agregarPro.php">Produtos</a></li>
						</ul>
						
					</li>
					<?php } }else{ ?>
					<li><form  action="engine/proces/login.php"  class="form-inline" method="post">
					  <input type="text" class="input-small" placeholder="Email" name="email">
					  <input type="password" class="input-small" placeholder="Password" name="password">
					  <button type="submit" class="btn">Entrar</button>
					</form></li>
					
					<li class="divider-vertical"></li>
					<li><a href="registro.php"> </span> Registrarse</a></li>


					<?php } ?>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>

</div>

