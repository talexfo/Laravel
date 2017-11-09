@extends('Layout')

@section('contenido')
	

	<h1>Editar Mensaje</h1>



<form action="{{ route('messages.update', $mensaje->id )}}" method="POST">
	<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
	
	<p><label for="nombre">
		Nombre
		<input type="text" name="nombre" value="{{ $mensaje->nombre }}">
		{!! $errors ->first('nombre','<span class=error>:message</span>')!!}
	</label></p>

	<p><label for="email">
		Email
		<input type="text" name="email" value="{{ $mensaje->email }}">
		{!! $errors ->first('email','<span class=error>:message</span>')!!}
	</label></p>

<p>
	<label for="mensaje">
		Mensaje
		<textarea name="mensaje" id="" cols="30" rows="5">{{ $mensaje->mensaje }}</textarea>
		{!!$errors ->first('mensaje','<span class=error>:message</span>')!!}
	</label>
</p>
	<input type="submit" value="Enviar">
</form>

@endsection

