<div id="formRegistro" class="span4_5">
	<h3>Registrate</h3>
	<h4>Es Gratis y Siempre lo Sera!</h4>
		<form action="formulario/registro.php" metod="post">
				<hr>
			<ul>

				<?php 

			


				 ?>
					<li>
							<input placeholder="Nombre"class="regUser" type="text"> 
							<input placeholder="Apellido"class="regUser"type="text">
					</li>
					
					<li>
							<input placeholder="Email"class="registroUser"type="text"> 
					</li>
						
					<li>
							<input placeholder="Repetir Email"class="registroUser"type="text"> 
					</li>
						
					<li>
							<input placeholder="Password"class="registroUser"type="password"> 
					</li>

				<hr>	
						
					<li>
							<input placeholder="D&iacute;a"class="regNacUser"type="text"> 
							<input placeholder="Mes"class="regNacUser"type="text"> 
							<input placeholder="A&ntilde;o"class="regNacUser"type="text"> 
					</li>
				<hr>
					<li>   
							<input type="radio" name="sexo" value="radio" id="sexo_0" class="clear left"/>
							<label class="clear left">Hombre </label>
	      					
	      					<input type="radio" name="sexo" value="radio" id="sexo_1" class="clear left"/>
	      					<label class="clear left">Mujer</label>
	      			</li>
      		</ul>
			
			<div id="bottonRegistro">
						<button> Registrate</button>
			</div>
		
		</form>
</div>
</div>