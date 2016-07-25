<h1>Agregar nuevo</h1>

{!! Form::open(['url'=>route('registro.store')]) !!}
	{!! Form::label('nombres', 'Ingrese nombre') !!}
	{!! Form::text('nombres') !!} <br />
	{!! Form::label('apellido_paterno', 'Ingrese paterno') !!}
	{!! Form::text('apellido_paterno') !!} <br />
	{!! Form::label('apellido_materno', 'Ingrese materno') !!}
	{!! Form::text('apellido_materno') !!} <br />
	{!! Form::submit('Agregar') !!}
{!! Form::close() !!}
