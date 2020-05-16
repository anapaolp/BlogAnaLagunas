@extends('layouts.app')

@section('content')
<main>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
          <img src="img/ny1.jpg" class="d-block" width="1400px" height="400px" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="img/ny4.jpg" class="d-block" width="1400px" height="400px" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="card titulo bienvenidos">

        <div class="container">
            <h1 class="d-none d-sm-block">New York City</h1>
            <h2>Blog</h2>
        </div>

    </div>
    <div class="container tareas">
    <div class="row">
    <div class="card col-6 tarea amarillo">
        <div class="card-body">
            <h5 class="text-center">Este video es para que nuestros seguidores se convencan de lo hermoso es Nueva York</h5>
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1421625237967801%2Fvideos%2F1796888263776931%2F&show_text=0&width=560" width="500" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            <h5 class="text-center"> 10 lugares indispensables para ir en Nueva York</h5>
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fviveusa.mx%2Fvideos%2F1831268240298106%2F&show_text=0&width=560" width="500" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
    </div>
    <div class="card col-6 tarea amarillo">
        <div class="card-body">
            <h5 class="text-center"> Que hermosa imagen de Nueva York</h5>
            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">New York, New York <a href="https://t.co/p7xEJmBhFA">pic.twitter.com/p7xEJmBhFA</a></p>&mdash; nyconly (@NYCONLY) <a href="https://twitter.com/NYCONLY/status/1261069530559909889?ref_src=twsrc%5Etfw">May 14, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    </div>
    </div>
    </div>
</main> 
@endsection
