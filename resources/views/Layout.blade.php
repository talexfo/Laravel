<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi Sitio</title>

<style>
	.active{
		text-decoration:none;
		color: green;
	}

	.error{
		color:red;
		font-size: 1rem;
	}

</style>

</head>
<body>
	<header>
		<!-- <h1>{{ request()->url()}}</h1> -->
		
		<?php
			function activeMenu($url)
			{
				return request()->is($url) ? 'active' : '';
			}
		 ?>


		
		

<h1>{{ request()->is('/') ? 'Estas en el Inicio' : 'No estas en el Inicio'}}</h1>


		<nav>
			<a class="{{activeMenu('/')}}" href="{{ route('inicio')  }} ">Inicio</a>			
			<a class="{{activeMenu('saludos/*')}}" href="{{route('saludos', 'Alejandro')}} ">Saludos</a>
	 		<a class="{{activeMenu('mensajes/create')}}" href="{{ route('mensajes.create') }}">Contactos</a>
	 		<a class="{{activeMenu('mensajes')}}" href="{{ route('mensajes.index') }}">Mensajes</a>
		</nav>
	</header>

@yield('contenido')

<footer>
<p>Este es el footer</p>
</footer>


</body>
</html>