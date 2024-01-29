<?php
    phpinfo();
?>
<form action="mailto:invetado@gmail.com" enctype="text/plain"  method="post">
		<fieldset>
			<legend>Datos Propietario</legend>
			Nombre:
				<input type="text" name="nombre"/><br/>
            Contraseña:
				<input type="password" name="clave"/><br/>
			Correo:
				<input type="mail" name="correo"/><br/>
			URL:
				<input type="url" name="url"/><br/>
            Fecha:
                <input type="date" name="url"/><br/>
            Tiempo:
                <input type="time" name="tiempo"/><br/>
            Número (min -10, max 10):
                <input type="url" name="url"/><br/>
			Teléfono:
				<input type="tel" name="telefono" pattern="[+]{1}[0-9]{2}[ ]{1}[0-9]{9}|[0-9]{3}[ ]{1}[0-9]{11}"/><br/>
			Dirección:
				<input type="text" name="direccion"/><br/>
			Localidad:
				<input type="text" name="localidad" pattern="[a-z,A-Z,Ñ,ñ, ,á-ú,Á-Ú]*"/> &nbsp;&nbsp;&nbsp;&nbsp; CP:<input type="text" name="codigopostal" pattern="[0-9]{5}"/>
				<br/>
			Provincias:
				<input list="provincias" name="provincias1"/>
				<datalist id="provincias">
					<option label="Granada" value="Granada"/>
					<option label="Malaga" value="Malaga"/>
					<option label="Jaen" value="Jaen"/>
					<option label="Cadiz" value="Cadiz"/>
					<option label="Almeria" value="Almeria"/>
					<option label="Cordoba" value="Cordoba"/>
					<option label="Sevilla" value="Sevilla"/>
					<option label="Huelva"value="Huelva"/>
				</datalist>
			<br/>

			Sexo:<br/>
				<input type="radio" name="sexo"/>Varón<br/>
				<input type="radio" name="sexo"/>Mujer<br/>
				<input type="radio" name="sexo"/>Otro<br/>

		</fieldset>

		<fieldset>
			<legend>Datos Mascota</legend>
			Nombre:
				<input type="text" name="nombremascota" pattern="[a-z,A-Z,Ñ,ñ, ,á-ú,Á-Ú]*"/><br/>
			NºChip:
				<input type="text" name="chip" pattern="[0-9]{15}"/><br/>
			Sexo:<br/>
				<input type="radio" name="sexomascota"/>Macho<br/>
				<input type="radio" name="sexomascota"/>Hembra<br/>
			Tipo:<br/>
			<input list="tipo" name="tipo2">
				<datalist id="tipo">
					<option value="perro" label="perro"/>
					<option value="gato" label="gato"/>
					<option value="hamster" label="hamster"/>
					<option value="tortuga" label="tortuga"/>
				</datalist>
			<br/>
			Vacunas:<br/>
				<input type="checkbox" name="rabia"/>Rabia<br/>
				<input type="checkbox" name="leismania"/>Leismania<br/>
				<input type="checkbox" name="moquillo" checked="yes"/>Moquillo<br/>
			Observaciones:<br/>
				<textarea name="observaciones" cols="50" rows="6"></textarea><br/>
		</fieldset>

		<p align="center">
			<input type="submit" value="Guardar mis Datos"/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="reset" value="Eliminar Datos"/>
		</p>

	</form>
