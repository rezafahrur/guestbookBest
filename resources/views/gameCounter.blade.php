<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="{{ asset('css/gameCounter.css') }}">
</head>
<body>
        <div id="wrapperLoadGame" class="wrapperLoad">
				<div class="left slideLeft"></div>
				<div class="spin">
				  <div class="load growUp"></div>
				</div>
				<div class="right slideRight"></div>
		</div>
    <div id="wrapper">
        <div id="info">
            <div class="title">BeSt 7th Anniversary
            <span>Games</span>
        </div>
        </div>
        <div id="counter">0</div>
        <div id="button"></div>
    </div>
        
    <form action="#" method="post">
            @csrf
            <input type="hidden" class="gameCount" name="nama" id="nama" value="{{ Session::get('nama') }}">
          <input type="hidden" class="gameCount" name="hp" id="hp" value="{{ Session::get('hp') }}">
          </form>
    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>