<?php require_once 'header.php'; ?>
<form method="POST" action="operaciones.php">
	<input type="hidden" name="operacion" value="agregar" />
	<table>
		<tr>
			<td><label for="nombres">Nombres:</label></td>
			<td><input type="text" name="nombres" id="nombres" /></td>
		</tr>
		<tr>
			<td><label for="apellido_paterno">Apellido Paterno:</label></td>
			<td><input type="text" name="apellido_paterno" id="apellido_paterno" /></td>		
		</tr>
		<tr>
			<td><label for="apellido_materno">Apellido Materno:</label></td>
			<td><input type="text" name="apellido_materno" id="apellido_materno" /></td>
		</tr>

		<tr>
			<td><label for="pais">Pa&iacute;s:</label></td>
			<td><select name="pais" id="pais">
				<option value="">Seleccione un pa&iacute;s</option>
				<option value="AR">Argentina</option>
				<option value="BO">Bolivia</option>
				<option value="CO">Colombia</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Seleccione G&eacute;nero</label></td>
			<td><label for="generom">Masculino</label>
			<input type="radio" name="genero" id="generom" value="Masculino" />
			<label for="generof">Femenino</label>
			<input type="radio" name="genero" id="generof" value="Femenino" /></td>
		</tr>
		<tr>

		</tr>
			<td><label>Seleccione Intereses</label></td>
			<td><input type="checkbox" name="intereses[]" value="computacion" />Computaci&oacute;n<br />
			<input type="checkbox" name="intereses[]" value="robotica" />Rob&oacute;tica<br />
			<input type="checkbox" name="intereses[]" value="redes" />Redes<br />
			<input type="checkbox" name="intereses[]" value="seguridad" />Seguridad<br />
			<input type="checkbox" name="intereses[]" value="programacion" />Programaci&oacute;n</td>
		<tr>
			<td><label for="direccion">Direcci&oacute;n:</label></td>
			<td><textarea name="direccion" id="direccion" rows="5"></textarea></td>
		</tr>
		<tr>
			<td><label for="telefono">Tel&eacute;fono:</label></td>
			<td><input type="text" name="telefono" id="telefono" /></td>
		</tr>
		<tr>
			<td><label for="institucion">Instituci&oacute;n:</label></td>
			<td><input type="text" name="institucion" id="institucion" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Agregar" /></td>
		</tr>
	</table>
</form>
<?php require_once 'footer.php'; ?>