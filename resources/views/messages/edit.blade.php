@extends('Layout')

@section('contenido')
	

	<h1>Editar Mensaje</h1>



<form action="{{ route('mensajes.update', $mensaje->id )}}" method="POST">
	<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	
	<p><label for="nombre">
		Nombre
		<input class="form-control" type="text" name="nombre" value="{{ $mensaje->nombre }}">
		{!! $errors ->first('nombre','<span class=error>:message</span>')!!}
	</label></p>

	<p><label for="email">
		Email
		<input class="form-control" type="text" name="email" value="{{ $mensaje->email }}">
		{!! $errors ->first('email','<span class=error>:message</span>')!!}
	</label></p>

<p>
	<label for="mensaje">
		Mensaje
		<textarea class="form-control" name="mensaje" id="" cols="30" rows="5">{{ $mensaje->mensaje }}</textarea>
		{!!$errors ->first('mensaje','<span class=error>:message</span>')!!}
	</label>
</p>
	<input class="btn btn-primary" type="submit" value="Enviar">
</form>

@endsection

