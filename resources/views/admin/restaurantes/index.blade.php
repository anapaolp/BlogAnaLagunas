@extends('layouts.admin')
@section('content')
<main>
		<div class="card titulo bienvenidos">
			<div class="container">
				<h2 class="text-left d-inline-block">Restaurantes</h2>
				<a href="{{route('adminrestaurantes.create')}}">
					<button type="button" class="btn btn-success float-right">Agrega tu post</button>
				</a>
			</div>
		</div><br>
		@foreach($restaurantes as $restaurante)
		<div class="container tareas tareas-admin">
			<div class="card text-black mb-3 tarea amarillo" >
				<div class="card-header">
					<h2 class="card-title d-inline ">{{ $restaurante->title}}</h2>
					<!-- form -->
					<form action="{{ route('adminrestaurantes.destroy', $restaurante->id)}}" method="POST">
					@csrf
					@method('DELETE')
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
			@endforeach
		</div>
		<div class="card col-12 align-content-center">
		</div>
	</main> 
@endsection