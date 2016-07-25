<h1>Index</h1>
<a href="{{ route('registro.create') }}">Agregar nuevo</a>
<table border="1">
	<tr>
		<th>Nombres</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Operaciones</th>
	</tr>
<?php
foreach ($estudiantes as $est) {
	echo "<tr>";
	echo "<td>".$est->nombres."</td>";
	echo "<td>".$est->apellido_paterno."</td>";
	echo "<td>".$est->apellido_materno."</td>";
	echo "<td>";
	echo "<a href='".route('registro.show', $est->id)."'>Mostrar</a> | ";
	echo "<a href='".route('registro.edit', $est->id)."'>Editar</a> | "; 
	echo "<a href='".route('eliminar', $est->id)."'>Eliminar</a>"; 

	?>
	{!! Form::open(['method'=>'DELETE', 'url'=>route('registro.destroy',$est->id )]) !!}
		<input type="submit" value="Eliminar" onclick="return confirm('Estas seguro de eliminar?')" />
		
	{!! Form::close() !!}

	<?php
	//echo link_to_route(route('registro.edit', $est->id), 'Editar');
	echo "</td>";
	echo "</tr>";
}
?>
</table>