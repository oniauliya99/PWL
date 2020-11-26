<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Auliya Oni Priyandika | @yield('header')</title>
</head>
<body>
    <div class="container">
        <!-- header -->
        <h1 align ="center">
            Pemrograman Web Lanjut  <span style="font-weight: bold; text-transform: capitalize;">@yield('header')</span>
			<br><br>
		</h1>

		<div class="header">
	</div>
	<div class="navbar">
		<ul>
		<li><a href="/templateviews">Home</a></li>
		<!-- <li class="nav-item {{ Route::is('templateviews') ? 'active' : '' }}">
 @can('user-display')
 <a class="nav-link" href="{{ route('templateviews') }}">Home</a>
 @endcan
</li> -->

		</ul>
	</div>
	<div class="container">
		<div class="text welcome">
			<h2>Ini Halaman @yield('header') </h2>
			<p>Nama  : Auliya Oni Priyandika</p>
			<p>NIM   : 1931710119</p>
			<p>Motto : Sing penting Mak Bapak seneng disek, yen aku gampang </p>

		</div>
		<div class="banner">
		<img src="/img/mikro.jpg" alt="">
		</div>
		<div class="text konten">
		@yield('konten')	
		</div>
		<div class="card my-4">
                  <h5 class="card-header">Beri Komentar:</h5>
                  <div class="card-body">
                    <form action="/createkomen/{{$definisis->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_article" value="{{$definisis->id}}">
                    <input type="hidden" name="author" value="{{Auth::user()->name}}">
                    <input type="hidden" name="featured_image" value="{{Auth::user()->featured_image}}">
                      <div class="form-group">
                        <textarea class="form-control" rows="3" required="required" name="text" placeholder="Beri komentar sebagai {{Auth::user()->name}}"></textarea>
                      </div>
                      <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                  </div>
                </div>

				<div class="post-comments">
                  <header>
                    <h3 class="h6">Komentar<span class="no-of-comments">(1)</span></h3>
                  </header>
                  @foreach($comments as $comment)
                  @if($comment->id_article == $definisis->id)
                  <div class="comment">
                    <!-- <div class="comment-header d-flex justify-content-between"> -->
                      <div class="user d-flex align-items-center">
                      @if(Auth::user()->featured_image != null)
                      <div class="avatar"><img src="{{'/storage/'.$comment->featured_image}}" style="width: 30px; height: 30px; border-radius: 50%" class="img-fluid"></div>
                     @else
                     <div class="avatar"><img src="{{'/img/akun.png'}}" style="width: 30px; height: 30px; border-radius: 50%" class="img-fluid"></div>
                        
                     @endif
                        <!--<div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div> -->
                        <div class="title"><strong>&nbsp;&nbsp;&nbsp;{{$comment->author}}</strong><span class="date">&nbsp;&nbsp;&nbsp;{{$comment->created_at->diffForHumans()}}</span></div>
                      </div>
                      
					<!-- </div> -->
                    <div class="comment-body">
					<br>
					<h6><b>Komentar: </b>{{$comment->text}}</h6>
					  <p></p>
                      <!-- @if($comment->author == Auth::user()->name)
                      <a href="/post/deleteComment/{{$comment->id}}" class="badge badge-danger">Delete</a>
                      <a></a>
                      <button id="badge-tombol-editcomment" class="badge badge-warning">Edit</button> 
                      <a href="/post/updateComment/{{$comment->id}}" class="badge badge-warning">Edit</a>
                      @endif -->
                    </div>
                    <textarea style="margin-top:10px; display:none;" name="editComment" class="form-control" id="form-editcomment" rows="3"></textarea>
                    @endif
                  @endforeach
                  </div>
                </div>



        <!-- footer -->
        <p class="footer">Hak cipta oleh <span style="font-weight: bold;"></span> cachemgr@auliyaoni</p>
    </div>
	
</body>
</html>