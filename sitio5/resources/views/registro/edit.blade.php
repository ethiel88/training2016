<h1>Editar</h1>

{!! Form::model($estudiante, ['method'=>'PUT', 'url'=>route('registro.update', $estudiante->id)]) !!}
	{!! Form::label('nombres', 'Ingrese nombre') !!}
	{!! Form::text('nombres') !!} <br />
	{!! Form::label('apellido_paterno', 'Ingrese paterno') !!}
	{!! Form::text('apellido_paterno') !!} <br />
	{!! Form::label('apellido_materno', 'Ingrese materno') !!}
	{!! Form::text('apellido_materno') !!} <br />
	{!! Form::submit('Actualizar') !!}
{!! Form::close() !!}
