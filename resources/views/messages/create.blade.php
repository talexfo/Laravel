
@extends('Layout')


@section('contenido')

<h1>Contacto</h1>

<h2>Escribeme</h2>

@if(session()->has('info'))
	<h3>{{ session('info')}}</h3>

@else


	

<form action="{{ route('mensajes.store')}}" method="POST">
	<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

	{!! csrf_field() !!}
	
	<p><label for="nombre">
		Nombre
		<input class="form-control" type="text" name="nombre" value="{{ old('nombre')}}">
		{!! $errors ->first('nombre','<span class=error>:message</span>')!!}
	</label></p>

	<p><label for="email">
		Email
		<input class="form-control" type="text" name="email" value="{{ old('email')}}">
		{!! $errors ->first('email','<span class=error>:message</span>')!!}
	</label></p>

<p>
	<label for="mensaje">
		Mensaje
		<textarea class="form-control" name="mensaje" id="" cols="30" rows="5" >{{ old('mensaje')}}</textarea>
		{!!$errors ->first('mensaje','<span class=error>:message</span>')!!}
	</label>
</p>
	<input class="btn btn-primary " type="submit" value="Enviar">
</form>


@endif

@stop