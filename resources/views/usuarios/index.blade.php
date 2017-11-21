@extends('Layout')

@section('contenido')
	<h1>Usuarios</h1>



<table class="table">
	
	<thead>
<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Email</th>
	<th>Role</th>
	<th>Acciones</th>
</tr>
		
	</thead>
	<tbody>
		@foreach ($lista as $item)

<tr>
	<td>{{$item->id}}</td>
	<td>{{$item->name}}</td>
	<td>{{$item->email}}</td>
	<td>
@foreach ($item->roles as $role)
	{{$role->display_name}}
@endforeach
		


	</td>
	<td>
		

	</td>
</tr>


		@endforeach
	</tbody>
</table>
@endsection