@extends('layouts.admin')
@section('content')
<main>
		<div class="main_regT container">
			<div class="card titulo bienvenidos">
				<div class="container">
					<h2>Edita tu tarea</h2>
				</div>
			</div>	
			<!-- form -->
			<div class="form card text-white mb-3 tarea morado mx-auto container p-3">
				<form class="text-white" method="POST" action="{{ route('admindestinos.update', $restaurante->id) }}" enctype="multipart/form-data">
		|		@csrf
				@method('PATCH')
					<div class="form-group">
						<label for="title">Post</label>
						<input value="{{ $destino->title}}" type="text" class="form-control" name="title">
					</div>
					<div class="form-group">
						<label for="title">Creado por: </label>
						<input value="{{ $destino->author}}" type="text" class="form-control" name="author">
					</div>
					<div class="form-group">
						<label for="description">Descripción</label>
						<textarea class="form-control" rows="3" name="description">
							{{ $destino->description}}
						</textarea>
					</div>
					@if(! $destino->file==NULL)
					<div class="form-group">
						<label for="file">Imagen actual:</label>
						<a href="{{ asset("destino/$destino->file" )}}">{{$destino->file}}</a>
					</div>
					<div class="form-group">
						<label for="file">Modificar archivo:</label>
						<input type="file" name="file" enctype>
					</div>
					@else
					<div class="form-group">
						<label for="file">Subir imagen:</label>
						<input type="file" name="file" enctype>
					</div>
					@endif
					<div class="form-group">
						<label>Fecha de Publicación:</label><br>
						<label for="date">Día: </label>
						<input type="date" name="date" value="{{$destino->date}}"
						min="2020-04-13" max="2020-06-13">
					</div>
					<br>
					<button type="submit" class="btn bg-white">Guardar</button>
				</form>
			</div>	
		</div>	
	</main>
@endsection