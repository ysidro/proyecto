	<div id="formRegistro" class="span4_5">
	<h3>Registrate</h3>
	<h4>Es Gratis y Siempre lo Sera!</h4>
		<form action="insert.php" method="post">
				<hr>
			<ul>
					<li>
							<input name="nombre" placeholder="Nombre"class="regUser" type="text"> 
							<input name="apellido" placeholder="Apellido" class="regUser"type="text">
					</li>
					<li>
							<input name="email" placeholder="Email" class="registroUser"type="text"> 
					</li>
					<li>
							<input name="rep-email" placeholder="Repetir Email" class="registroUser"type="text"> 
					</li>
					<li>
							<input name="password" placeholder="Password" class="registroUser"type="password"> 
					</li>
				<hr>	
					<li>
							<input name="dia" placeholder="D&iacute;a" class="regNacUser" type="text"> 
							<input name="mes" placeholder="Mes" class="regNacUser" type="text"> 
							<input name="anio" placeholder="A&ntilde;o" class="regNacUser" type="text"> 
					</li>
				<hr>
					<li class="span4">   
							<label class="clear left">Sexo</label>
							<select name="sexo" id="">
								<option value="`">Seleciones</option>
								<option value="hombre">Hombre</option>
								<option value="mujer">Mujer</option>
							</select>
							<hr>	
	      			</li>
      		</ul>
			<div id="bottonRegistro">
						<input type="submit" value="Enviar" class="btn">
						<input type="reset" value="Borrar" class="btn">
			</div>
		</form>
</div>
</div>