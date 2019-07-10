<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/loginTamu.css') }}">
</head>
<body>
    <div class="container">
        <div class="left">
          <div class="header">
            <h2 class="animation a1">Halo Lagi...  <span class="animation a3"> <i class="far fa-smile"></i></span> </h2>
            <h4 class="animation a5">Silahkan Login untuk Berinteraksi dengan Kami selama berjalannya acara ini</h4>
          </div>
          <form action="login" method="post" autocomplete="off">
              @csrf
          <div class="form">
            <input type="number" name="hp" class="form-field animation a3" placeholder="Masukkan Nomor HP Anda" required>
            <button type="submit" class="animation a6">LOGIN</button>
          </div>
        </form>
        </div>
        <div class="right"></div>
      </div>
      
</body>
</html>