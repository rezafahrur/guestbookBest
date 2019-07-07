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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
  <div class="main-container">
  <!--first elements-->
  <div class="x x-top">
    <div class="plus left plus-top-left"></div>
    <div class="plus right plus-top-right"></div>
  </div>
  <div class="video">
    <div class="colors">
      <div class="color1 color"></div><div class="color2 color"></div><div class="color3 color"></div><div class="color4 color"></div><div class="color5 color"></div>
    </div>
  </div>
  <div class="x x-bottom">
    <div class="plus left plus-bottom-left"></div>
    <div class="plus right plus-bottom-right"></div>
  </div>
  <!--second elements-->
  <div class="bg">BeSt</div>
  <div class="arrow arrow-top">
    <div class="head"></div>
  </div>
  <div class="arrow arrow-bottom">
    <div class="head2"></div>
  </div>
  <div class="big">7th ANNIVERSARY BEST</div>
  <div class="plus plus-center plus1"></div>
  <div class="plus plus-center plus2"></div>
  <div class="plus plus-center plus3"></div>
  <div class="plus plus-center plus4"></div>
  <div class="center-square"></div>
  <div class="top-text first-text"><div class="this">BEST&nbsp;</div> <div class="is">DIGITAL&nbsp;</div> <div class="my">ON PROGRESS</div></div>
  <div class="bottom-text first-text"><div class="this">7th&nbsp;</div> <div class="is">ANNIVERSARY&nbsp;</div> <div class="my">BeSt</div></div>
  <!--third elements-->
  <div class="projects">
    <div class="row row-first">
      <a href="gallery"><div class="project candid"></div></a>
    </div>
    <div class="row row-second"><a href="gallery"><div class="project coffee"></div></a>
    </div>
    <div class="row row-third"><a href="game"><div class="project game"></div></a>
    </div>
  </div>
</div>
    
</body>
</html>