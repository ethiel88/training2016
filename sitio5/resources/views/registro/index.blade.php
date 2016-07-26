@extends('layouts.template1')
@section('title', 'Home')
@section('h1', 'Home')
@section('operaciones')
	@parent
<li><a href="{{ route('registro.create') }}">Agregar nuevo</a></li>
@endsection

@section('content')
<table border="1">
	<tr>
		<th>Nombres</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Operaciones</th>
	</tr>
@forelse ($estudiantes as $est)
	<tr>
		<td>{{ $est->nombres }}</td>
		<td>{{ $est->apellido_paterno }}</td>
		<td>{{ $est->apellido_materno }}</td>
		<td>
			{!! link_to_route("registro.show", "Mostrar", $est->id) !!} | 
			{!! link_to_route("registro.edit", "Editar", $est->id) !!} |
			{!! link_to_route("eliminar", "Eliminar", $est->id) !!}
		</td>
	</tr>
@empty
	<tr><td colspan="4" align="center">No hay registros</td></tr>
@endforelse
<?php
/*foreach ($estudiantes as $est) {
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
}*/
?>
</table>
@endsection