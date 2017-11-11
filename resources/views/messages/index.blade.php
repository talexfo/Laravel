@extends('Layout')

@section('contenido')

<h1>Todos los Mensajes</h1>


<table class="table">
	
	<thead>
<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Email</th>
	<th>Mensaje</th>
	<th>Acciones</th>
</tr>
		
	</thead>
	<tbody>
		@foreach ($mensajes as $item)

<tr>
	<td>{{$item->id}}</td>
	<td><a href=" {{ route('mensajes.show', $item->id) }} ">{{$item->nombre}}</a></td>
	<td>{{$item->email}}</td>
	<td>{{$item->mensaje}}</td>
	<td>
		<a class="btn btn-info btn-xs" href=" {{ route('mensajes.edit', $item->id) }}">Editar</a>
<form style="display:inline" method="POST" action="{{ route('mensajes.destroy', $item->id) }}">
	
{{ method_field('DELETE') }}
	{{ csrf_field() }}
	<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
</form>

	</td>
</tr>


		@endforeach
	</tbody>
</table>

@stop
