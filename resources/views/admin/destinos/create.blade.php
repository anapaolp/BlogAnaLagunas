@extends('layouts.admin')
@section('content')
<main>
		<div class="main_regT container">
			<div class="card titulo bienvenidos">
				<div class="container">
					<h2>Publlica tu post!</h2>
					<h5>Es muy fácil solo llena el formulario</h5>
				</div>
			</div>	
			<!-- form -->
			<div class="form card text-black mb-3 tarea amarillo mx-auto container p-3">
				<form class="text-dark" method="POST" action="{{ route('admindestinos.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="title">Post</label>
						<input type="text" class="form-control" name="title">
					</div>
					<div class="form-group">
						<label for="title">Creado por: </label>
						<input type="text" class="form-control" name="author">
					</div>
					<div class="form-group">
						<label for="description">Descripción</label>
						<textarea class="form-control" rows="3" name="description"></textarea>
					</div>
					<div class="form-group">
						<label for="file">Imagen:</label>
						<input type="file" name="file" enctype>
					</div>
					<div class="form-group">
						<label>Fecha de Publicación:</label><br>
						<label for="date">Día: </label>
						<input type="date" name="date" value="2020-04-13"
						min="2020-04-13" max="2020-06-13">
					</div>
					<br>
					<button type="submit" class="btn bg-white">Guardar</button>
				</form>
			</div>	
		</div>	
	</main>
@endsection