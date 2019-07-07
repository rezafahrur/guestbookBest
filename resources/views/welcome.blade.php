<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- manifest -->
	<link rel="manifest" href="manifest.json">
   

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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="icon" type="image/png" sizes="256x256" href="{{ asset("/images/bms_icon_256.png") }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>Guest of BeSt 7th Anniversary</title>
</head>

<body>
	<div class="container" id="container">
		<div class="form-container guest-container">
			<form name="guest" action="/" method="POST" autocomplete="off"> 
				@csrf
				<h1>Cari Nama atau Nomor HP Anda</h1>
				<br>
				<center>
					<div class="floating-form fontSize">
						<div class="floating-label">
								<select id="id" name="id" class="form-control selectpicker" data-live-search="true" onchange='this.form.submit()' required autofocus>
										<option disabled selected value="">PILIH NAMA ATAU NOMOR HP</option>
										@foreach ($guestCollection as $guest)
								<option value="{{$guest->id}}">{{$guest->nama}} - {{$guest->hp}}</option>    
										@endforeach
									</select>
						</div>
					</div>
				</center>
				<br>
			<!--	<button type="submit">Pilih Nama Saya</button> -->
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Selamat Datang <i class="fas fa-smile-wink"></i></h1>
					<p>
						<br>
						Cari Nama Anda dan Mulailah Perjalanan Anda Bersama Kami <br> dalam <br> BeSt 7th Anniversary
						<br>
						<br>
						<h3>"BeSt Digital on Progress"</h3>	
						<p>July 11th, 2019</p>
					</p>
				</div>
			</div>
		</div>
	</div>


	<script src="{{ asset('js/app.js') }}"></script>
	@if (Session::get('thanks') == true)
		<script>
			$.notify("Terima Kasih Telah Datang di BeSt 7th Anniversary", "info");
		</script>
	@endif
</body>
</html>