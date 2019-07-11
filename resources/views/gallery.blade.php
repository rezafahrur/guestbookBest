<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#1e272e">
<!-- manifest -->
<link rel="manifest" href="manifest2.json">
   

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Guestbook BeSt">
<link rel="icon" sizes="256x256" href="{{ asset("/images/bms_icon_256.png") }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#a64bf4">
<meta name="apple-mobile-web-app-title" content="PWA">
<link rel="apple-touch-icon" href="{{ asset("/images/bms_icon_256.png") }}">

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset("/images/bms_icon_256.png") }}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset("/images/bms_icon_256.png") }}">
<title>BeSt 7th Anniversary</title>
  <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
</head>
  
<body>
		<div id="wrapperLoadGallery" class="wrapperLoad">
				<div class="up slideUp"></div>
				<div class="spin">
				  <div class="load grow"></div>
				</div>
				<div class="down slideDown"></div>
		</div>
  
  <h1>BeSt Photos <br> in <br> BeSt 7th Anniversary</h1>
		<p class="center">"BeSt Digital on Progress"</p> 
    
	<div class="gallery">	
		@if (empty($fileNames))
		<a href="gallerydetail/mitra-best.jpg">
				<img src="{{ asset('images/mitra-best.jpg')}}" type="thumbnail" alt="">
		</a>
		<br>
		<center>
		<h2>Foto Belum Tersedia di Meja {{$table}} <br> Silahkan Kembali Lagi Nanti</h2>
		</center>
		@else
			@foreach ($fileNames as $fileName)	
			<a href="gallerydetail/{{$table}}/{{$fileName}}">
				<img src="{{ asset('images/tables/'.$table .'/'. $fileName)}}" type="thumbnail" alt="">
			</a>
			@endforeach
			<br>
		<center>
			@if ($table != "photoBoot")
			<h2>BeSt Gallery Photos <br> Meja {{$table}}</h2>		
			@else
			<h2>BeSt Gallery Photos <br> Photo Booth</h2>		
			@endif
		
		<ul>
			<li><a class="downloads back" href="home">Back</a></li> 
		</ul>
		</center>
		@endif
	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
  
</html>