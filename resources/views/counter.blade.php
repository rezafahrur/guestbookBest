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
    <title>BeSt 7th Anniversary</title>
    <link rel="stylesheet" href="{{ asset('css/counter.css') }}">
</head>
<body>
    <div class="page-background">
        <svg class="triangles">
          <polygon class="triangle-a" />
        </svg>
        <svg class="triangles">
              <polygon class="triangle-b" />
        </svg>
      </div>
      <div class="caption">
      </div>
      
      <div class="container">
        <div class="counter-bar hidden">
        </div>
        
        <div class="counter-button">
        </div>
        
        <div class="counter-text">
          30
        </div>
      </div>
      <div class="inspired">
        <span>
          BeSt 7th Anniversay, "BeSt Digital on Progress"
        </span>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>