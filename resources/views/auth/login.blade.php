@extends('Layout')

@section('contenido')



<h1>Login</h1>
<form class="form-inline" action="/login" method="POST">

	{{ csrf_field() }}

	<input class="form-control" type="email" name="email" placeholder="Email">
	<input class="form-control" type="password" name="password" placeholder="Password">
	<input class="btn btn-primary" type="submit" value="Acceder">
</form>

<br>


@endsection