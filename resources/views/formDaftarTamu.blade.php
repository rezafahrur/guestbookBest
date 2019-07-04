<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Tamu BeSt 7th Anniversary</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <form name="login-form" class="login-form" action="daftarTamu" method="post" autocomplete="off" >
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