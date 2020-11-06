<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style.css">
    <title>Auliya Oni Priyandika | @yield('header')</title>
</head>
<body>
    <div class="container">
        <!-- header -->
        <h1 align="center">
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

			<li><a href="/indexx/{id}">Definisi</a></li>
			<li><a href="/fungsi/{id}">Fungsi</a></li>
			<li><a href="/sejarahview/{id}">Sejarah</a></li>
			<li><a href="/winbox/{id}">Winbox</a></li>		
		</ul>
	</div>
	<div class="container">
		<div class="text welcome">
			<h2>Ini Halaman @yield('header') </h2>
			<p>Nama  : Auliya Oni Priyandika</p>
			<p>NIM   : 1931710119</p>
			<p>Motto : Sing penting Mak Bapak seneng disek, yen aku gampang </p>

		</div>
		<div class="banner"></div>
		<div class="text konten">
		@yield('konten')	
		</div>
	</div>
        <!-- footer -->
        <p class="footer">Hak cipta oleh <span style="font-weight: bold;"></span> cachemgr@auliyaoni</p>
    </div>
</body>
</html>