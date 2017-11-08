@extends('Layout')

@section('contenido')

<h1>Todos los Mensajes</h1>


<table width="100%" border="1ed">
	
	<thead>
<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Email</th>
	<th>Mensaje</th>
</tr>
		
	</thead>
	<tbody>
		@foreach ($mensajes as $item)

<tr>
	<td>{{$item->id}}</td>
	<td>{{$item->nombre}}</td>
	<td>{{$item->email}}</td>
	<td>{{$item->mensaje}}</td>
</tr>


		@endforeach
	</tbody>
</table>

@stop
