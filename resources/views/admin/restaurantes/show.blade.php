@extends('layouts.admin')
@section('content')

<div class="card titulo bienvenidos">	
</div><br>
<div class="container tareas tareas-admin">
	<div class="card text-black mb-3 tarea amarillo" >
		<div class="card-header">
			<h2 class="card-title d-inline ">{{ $restaurante->title}}</h2>
			<!-- form -->
			<form action="">
				<a href="{{ route('adminrestaurantes.show',$restaurante->id)}}"><button type="button" class="btn btn-light float-right">Ver</button></a>
				<a href="{{ route('adminrestaurantes.edit',$restaurante->id)}}"><button type="button" class="btn btn-light float-right">Editar</button></a>
				<a><button type="submit" class="btn btn-light float-right">Eliminar</button></a>
			</form>
			<h6>Fecha de Publicación: <b>{{ $restaurante->date}}</b></h6>
		</div>
		<div class="card-body">
			<h6><b> Descripción:</b></h6>
			<p class="card-text">{{ $restaurante->description}}</p>
			@if(! $restaurante->file==NULL)
					<p class="d-inline"><b> Archivo / imagen: </b></p>
					<a target="_blank" href="{{asset ("restaurantes/$restaurante->file") }}" class="text-body">{{ $restaurante->file}}</a>
			@endif
		</div>
	</div>
</div>
<!--
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width=""></div>
@endsection
-->
@endsection