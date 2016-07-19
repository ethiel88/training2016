<?php
if(!isset($_GET['id']))
	header('location: index.php');

require_once '../clases/Estudiante.php';
$obj = new Estudiante($_GET['id']);
?>
<?php require_once 'header.php'; ?>
<form method="POST" action="operaciones.php">
	<input type="hidden" name="operacion" value="editar" />
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
	<table>
		<tr>
			<td><label for="nombres">Nombres:</label></td>
			<td><input type="text" name="nombres" id="nombres" value="<?php echo $obj->getNombres(); ?>" /></td>
		</tr>
		<tr>
			<td><label for="apellido_paterno">Apellido Paterno:</label></td>
			<td><input type="text" name="apellido_paterno" id="apellido_paterno" value="<?php echo $obj->getApellido_paterno(); ?>" /></td>		
		</tr>
		<tr>
			<td><label for="apellido_materno">Apellido Materno:</label></td>
			<td><input type="text" name="apellido_materno" id="apellido_materno" value="<?php echo $obj->getApellido_materno(); ?>" /></td>
		</tr>

		<tr>
			<td><label for="pais">Pa&iacute;s:</label></td>
			<td><select name="pais" id="pais">
				<option value="">Seleccione un pa&iacute;s</option>
				<option <?php echo $obj->getPais()=='AR'?'selected="selected"':''; ?>   value="AR">Argentina</option>
				<option <?php echo $obj->getPais()=='BO'?'selected="selected"':''; ?> value="BO">Bolivia</option>
				<option <?php echo $obj->getPais()=='CO'?'selected="selected"':''; ?> value="CO">Colombia</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Seleccione G&eacute;nero</label></td>
			<td><label for="generom">Masculino</label>
			<input <?php echo $obj->getGenero()=='Masculino'?'checked="checked"':''; ?> type="radio" name="genero" id="generom" value="Masculino" />
			<label for="generof">Femenino</label>
			<input <?php echo $obj->getGenero()=='Femenino'?'checked="checked"':''; ?> type="radio" name="genero" id="generof" value="Femenino" /></td>
		</tr>
		<tr>

		</tr>
			<td><label>Seleccione Intereses</label></td>
			<td>
			<?php
			$intereses = $obj->getIntereses();
			?>
			<input <?php echo in_array('computacion', $intereses)?'checked="checked"':'';?> type="checkbox" name="intereses[]" value="computacion" />Computaci&oacute;n<br />
			<input <?php echo in_array('robotica', $intereses)?'checked="checked"':'';?>type="checkbox" name="intereses[]" value="robotica" />Rob&oacute;tica<br />
			<input <?php echo in_array('redes', $intereses)?'checked="checked"':'';?>type="checkbox" name="intereses[]" value="redes" />Redes<br />
			<input <?php echo in_array('seguridad', $intereses)?'checked="checked"':'';?>type="checkbox" name="intereses[]" value="seguridad" />Seguridad<br />
			<input <?php echo in_array('programacion', $intereses)?'checked="checked"':'';?>type="checkbox" name="intereses[]" value="programacion" />Programaci&oacute;n</td>
		<tr>
			<td><label for="direccion">Direcci&oacute;n:</label></td>
			<td><textarea name="direccion" id="direccion" rows="5"><?php echo $obj->getDireccion(); ?></textarea></td>
		</tr>
		<tr>
			<td><label for="telefono">Tel&eacute;fono:</label></td>
			<td><input type="text" name="telefono" id="telefono" value="<?php echo $obj->getTelefono(); ?>" /></td>
		</tr>
		<tr>
			<td><label for="institucion">Instituci&oacute;n:</label></td>
			<td><input type="text" name="institucion" id="institucion" value="<?php echo $obj->getInstitucion(); ?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Actualizar" /></td>
		</tr>
	</table>
</form>
<?php require_once 'footer.php'; ?>