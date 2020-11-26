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
                        <a class="navbar-brand" href="{{ url('/templateviews') }}">
                        Manage Data Tabel
                        </a>
                        <a class="navbar-brand" href="{{ url('/manageuser') }}">
                        Manage Data User
                        </a>
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
            
        </main>
    </div>
    <div class="container">
    
        <div class="row">
             <div class=col-6>
             <h1 class="mt-3">Form Edit Data User</h1>
             <form method="post" action="/manageuser/update/{{$users->id}}" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" placeholder="Masukkan ID" name="id"
                        value="{{$users->id}}">
                    
                    </div>
                    <div class="form-group">
                        <label for="konten">Nama</label>
                        <input type="text" class="form-control " id="konten" placeholder="Masukkan konten" name="name"
                        value="{{$users->name}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="konten">Email</label>
                        <input type="text" class="form-control " id="konten" placeholder="Masukkan konten" name="email"
                        value="{{$users->email}}">
                       
                    </div>
                    <div class="form-group">
                        <label for="konten">Roles (Administrator/User)</label>
                        <input type="text" class="form-control" id="konten" placeholder="Masukkan konten" name="roles"
                        value="{{$users->roles}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Featured Image</label>
                        <input type="file" class="form-control" required="required" name="featured_image"
                            value="{{$users->featured_image}}"></br>
                        <img width="150px" src="{{asset('storage/'.$users->featured_image)}}">
                    </div>
                    <button type="submit" class="btn btn-primary" name="edit">Ubah Data</button>
            </form>
             </div>
        </div>
    </div>
</body>
</html>
