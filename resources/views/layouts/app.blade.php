<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New York City</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link rel="shortcut icon" href="img/icons/ny.png">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Rufina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/icons/ny.png')}}" width="5px" height="10px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Inicia Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Registrate</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item dropleft">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('adminrestaurantes.index')}}">ver más....</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Cerrar sesión </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main> 
    <footer>
        <div class="container text-white text-center pt-4">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <a class="text-white" href="https://www.facebook.com/anapao.lagunas/">Facebook Ana Lakes</a>
                    <img src="{{asset('img/icons/facebook.png')}}" width="20px" height="20px" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <a class="text-white" href="https://www.instagram.com/anapaolp">Instagram @anapaolp</a>
                    <img src="{{asset('img/icons/instagram.png')}}" width="20px" height="20px" alt="">
                </div>
                
            </div>
        </div>
        <div class="footer-copyright">
          <div class="container text-white">
          © 2020 Copyright Text
          </div>
        </div>
    </footer>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>