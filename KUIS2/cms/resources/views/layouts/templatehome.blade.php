<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Homeviews') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" >
                   Auliya Ubak
                </a>
                <!-- <a class="navbar-brand" href="{{ url('/manage') }}">
                   Manage Data
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
                        @can('manage-articles')
                        <a class="navbar-brand" href="{{ route('manage') }}">Manage Data</a>
                        @endcan
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                    {{ Auth::user()->name }} 
                                    @if(Auth::user()->featured_image != null)
                                    <img src="{{'/storage/'. Auth::user()->featured_image}}"  style="width: 30px; height: 30px; border-radius: 50%">
                                    @else
                                    <img src="{{'/img/akun.png'}}"  style="width: 30px; height: 30px; border-radius: 50%">
                                    @endif
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<!-- <!doctype html>
<html lang="en"> -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Home Template</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/bootstrap-4.5.2-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    a {
      text-decoration:none;
    }
    .container{
      float:middle;
    }    
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display:inline-block;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          float:left;
          display:block;
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
         </div>
      </div>
    </div>
  </div>
  <!-- <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Pemrograman Web Lanjut</strong>
      </a>
      
      
    </div>
  </div> -->
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Routing the World</h1>
      <p class="lead text-muted"> Selamat Datang di Halaman Home Auliya Oni Priyandika. Tema yang akan dibahas kali ini adalah mengenai <i>Routerboard Mikrotik</i></p>
      <p>
        <a class="btn btn-primary my-2">Kelas MI 2E</a>
        <a class="btn btn-secondary my-2">1931710119</a>
      </p>
    </div>
  </section>
  <!-- lokasi sebelumnya -->
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      @foreach($definisis as $art)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm"  >
            <img class="bd-placeholder-img card-img-top" src="{{'/storage/'.$art->featured_image}}" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>{{$art->judul}} :</b></text></img> 
            <div class="card-body">
              <p class="card-text">{{$art->konten}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{$art->link}}">View More</a></button>
                </div>
                <small class="text-muted">Auliya Oni</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{$definisis->links()}} 
        <!-- lokasi sebelumnya -->
</main>
</html>
