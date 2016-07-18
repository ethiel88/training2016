<?php require_once 'header.php'; ?>
<!-- registros -->
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nombres</th>
		<th>Paterno</th>
		<th>Materno</th>
		<!-- th>G&eacute;nero</th>
		<th>Pa&iacute;s</th>
		<th>Direcci&oacute;n</th>
		<th>Tel&eacute;fono</th>
		<th>Instituci&oacute;n</th>
		<th>Intereses</th -->
		<th>Operaciones</th>
	</tr>
	<?php
	require_once('../clases/Estudiante.php');
	$obj = new Estudiante();
	$estudiantes = $obj->getAllStudents();
	while($estudiante = $estudiantes->fetch_assoc()){
		$obj2 = new Estudiante($estudiante['id']); ?>
	<tr>
		<td><?php echo $obj2->getId(); ?></td>
		<td><?php echo $obj2->getNombres(); ?></td>
		<td><?php echo $obj2->getApellido_paterno(); ?></td>
		<td><?php echo $obj2->getApellido_materno(); ?></td>
		<td>
			<a href="ver.php?id=<?php echo $obj2->getId(); ?>">Ver</a> | 
			<a href="editar.php?id=<?php echo $obj2->getId(); ?>">Editar</a> | 
			<a href="javascript:eliminar(<?php echo $obj2->getId(); ?>)">Eliminar</a>
		</td>
		<!--td><?php echo $obj2->getGenero(); ?></td>
		<td><?php echo $obj2->getPais(); ?></td>
		<td><?php echo $obj2->getDireccion(); ?></td>
		<td><?php echo $obj2->getTelefono(); ?></td>
		<td><?php echo $obj2->getInstitucion(); ?></td>
		<td>
			<?php
			echo "<ol>";
			if($obj2->getIntereses() != false){
				foreach($obj2->getIntereses() as $valor){
					echo "<li>".$valor."</li>";
				}
			}
			echo "</ol>";
			?>
		</td -->
	</tr>
	<?php } ?>
</table>
<?php require_once 'footer.php'; ?>	
<script>
	function eliminar(id){
		if(confirm("Esta seguro de eliminar este registro?"))
			window.location = "operaciones.php?operacion=eliminar&id="+id
	}
</script>