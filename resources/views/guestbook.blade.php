<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- manifest -->
        <link rel="manifest" href="manifest.json">
   

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PWA">
    <link rel="icon" sizes="512x512" href="{{ asset("/images/bms_icon_256.png") }}">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#a64bf4">
    <meta name="apple-mobile-web-app-title" content="PWA">
    <link rel="apple-touch-icon" href="{{ asset("/images/bms_icon_256.png") }}">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset("/images/bms_icon_256.png") }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Guest of BeSt 7th Anniversary</title>
</head>

<body>
	<div class="container right-panel-active" id="2container">
		<div class="form-container meet-up-guest-container">
            <form name="meet-up_guest" action="/" method="POST" autocomplete="off">
                @csrf
				<h1>Apakah Data Anda Sudah Benar?</h1>
				<br>
				<center>
                    <input name="id" type="hidden" value="{{$visitor->id}}">
                        <div class="floating-form">
                                <div class="floating-label">
                                <input class="floating-input" name="nama" placeholder=" " autocorrect="off" value="{{$visitor->nama}}" required>
                                    <span class="highlight"></span>
                                    <label>Nama Saya</label>
                                </div>
                            </div>
                                <br>
                                <div class="floating-form">
                                    <div class="floating-label">
                                        <input type="number" class="floating-input" name="hp" placeholder=" " value="{{$visitor->hp}}" autocorrect="off" required>
                                        <span class="highlight"></span>
                                        <label>Nomor HP dan WhatsApp Saya</label>
                                    </div>
                                </div>
				</center>
                <br>
                <input type="hidden" name="_method" value="PUT">
				<button type="submit">Ya, Informasikan kehadiran Saya</button>
			</form>
        </div>
        <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Halo, {{ $namaTamu }} <i class="fas fa-smile"></i></h1>
                        <p>
                           Pastikan Nama dan Nomor HP Anda Sudah Benar <br> Kami akan mengirimkan link via WhatsApp <br> untuk mengakses aplikasi selama jalannya acara ini 
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
</body>
</html>