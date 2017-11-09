@extends('Layout')

@section('contenido')



<h1>Login</h1>
<form action="/login" method="POST">

	{{ csrf_field() }}

	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" value="Acceder">
</form>

<br>


@endsection