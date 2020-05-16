@extends('layouts.admin')
@section('content')
<main>
		<div class="card titulo bienvenidos">
			<div class="container">
				<h2 class="text-left d-inline-block">Destinos turisticos</h2>
				<a href="{{route('admindestinos.create')}}">
					<button type="button" class="btn btn-success float-right">Agrega tu post</button>
				</a>
			</div>
		</div><br>
		@foreach($destinos as $destino)
		<div class="container tareas tareas-admin">
			<div class="card text-black mb-3 tarea amarillo" >
				<div class="card-header">
					<h2 class="card-title d-inline ">{{ $destino->title}}</h2>
					<!-- form -->
					<form action="{{ route('admindestinos.destroy', $destino->id)}}" method="POST">
					@csrf
					@method('DELETE')
						<a href="{{ route('admindestinos.show',$destino->id)}}"><button type="button" class="btn btn-light float-right">Ver</button></a>
						<a href="{{ route('admindestinos.edit',$destino->id)}}"><button type="button" class="btn btn-light float-right">Editar</button></a>
						<a><button type="submit" class="btn btn-light float-right">Eliminar</button></a>
					</form>
					<h6>Fecha de Publicación: <b>{{ $destino->date}}</b></h6>
				</div>
				<div class="card-body">
					<h6><b> Descripción:</b></h6>
					<p class="card-text">{{ $destino->description}}</p>
					@if(! $destino->file==NULL)
					<p class="d-inline"><b> Archivo / imagen: </b></p>
					<a target="_blank" href="{{asset ("destinos/$destino->file") }}" class="text-body">{{ $destinos->file}}</a>
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</main> 
@endsection