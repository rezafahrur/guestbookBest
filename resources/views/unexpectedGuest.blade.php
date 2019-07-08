<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- manifest -->
<link rel="manifest" href="manifest3.json">
   

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
    <title>Input Data Tamu BeSt 7th Anniversary</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <form name="unexpected-form" class="login-form" action="unexpected" method="post" autocomplete="off" >
		@csrf
		<div class="header">
		<h1>Input Data Tamu BeSt</h1>
		<span>Masukkan Data Tamu 7th Anniversary Di bawah</span>
		</div>
	
		<div class="content">
		<input name="nama" type="text" class="input username" placeholder="Nama Tamu" required/>
		<div class="user-icon"></div>
		<input name="hp" type="text" class="input password" placeholder="Nomor HP (Kalo Bisa No WA)" required/>
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<button type="submit" class="button">Masukkan Data Tamu</button>
		</div>
    </form>
    <br><br><br><br><br><br>
    <center>
      <button type="button" class="tabelButton" id="buttonLihat"> Lihat Tabel Tamu </button>
    </center>
	<script src="{{asset('js/app.js')}}"></script>
	@if (Session::get('sukses') == true)
		<script>
			$.notify("Data Tamu Berhasil Ditambah", "success");
		</script>
	@endif
</body>
</html>