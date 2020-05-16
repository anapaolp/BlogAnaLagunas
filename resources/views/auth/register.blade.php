@extends('layouts.app')
@section('content')
<main>
    <div class="container mt-3">
      <div class="row">
        <div class="col-4 ">
          <div class="card mb-3 bg-dark">
            <div class="card-body">
              <img src="{{asset('img/ny5.jpg')}}" width ="300px" height="300px" alt="">
              <h5 class="text-center text-white">Ve las mejores fotografías</h5>
            </div>
          </div>
        </div>
        <div class="col-4 ">
          <div class="card mb-3 bg-dark">
            <div class="card-body">
              <img src="{{asset('img/ny6.jpg')}}" width ="300px" height="300px"alt="">
              <h5 class="text-center text-white">Conoce las diferentes atracciones turísticas</h5>
            </div>
          </div>
        </div>
        <div class="col-4 ">
          <div class="card mb-3">
            <div class="card-body bg-dark">
              <img src="{{asset('img/ny7.jpg')}}" width ="300px" height="300px" alt="">
              <h5 class="text-center text-white">Publica tus posts</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="main_reg">
            
            <div class="card titulo bienvenidos">
                <div class="container haztucuenta">
                    <h2 class="d-none d-md-block">Hola!</h2>
                    <h3 >Haz tu cuenta</h3>
                </div>
            </div>      
            <!-- form -->
            <div class="form morado card text-black mb-3 tareas mx-auto container" >
                <form class="text-white" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-w">Registrar!</button>
                </form>
            </div>
        </div>
    </main> 
@endsection