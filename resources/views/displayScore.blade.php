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
        <link rel="manifest" href="manifest6.json">
   

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
        <link rel="stylesheet" href="{{ asset('css/visited.css') }}">
        <title>BeSt 7th Anniversary</title>
</head>

<body>

    <div class="container">
        <center>
            <h2> Pemenang Games BeSt 7th Anniversary </h2>
        </center>
        <div class="row py-5">
          <div class="col-12">
            <table id="scoreGame" class="table table-hover responsive nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>Score</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>