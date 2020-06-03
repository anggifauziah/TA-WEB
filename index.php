<?php
session_start(); // mengaktifkan session
if(empty($_SESSION)){ //pengecekan bila session kosong
   echo "<script>alert('Anda Harus Login Terlebih Dahulu');
  document.location='login.php';
  </script>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>project dpw</title>
		<link rel="stylesheet" type="text/css" href="css/styledbkam.css">
	</head>
	<body>
		<header>
			<nav>
				<h1>HOTEL TRUNOJOYO</h1>
				<ul>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="sidebar">
				<ul>
					<h1></h1>
					<li><a href="kategori.php">Data Kategori</a></li>
				</ul>
				<ul>
					<h1></h1>
					<li><a href="kamar.php">Data kamar</a></li>
				</ul>
				<ul>
					<h1></h1>
					<li><a href="booking.php">Booking</a></li>
				</ul>
			</div>
			<div class="content">
				<h2>SELAMAT DATANG </h2>
        <br>
        <h3>DI SISTEM MANAJEMEN HOTEL TRUNOJOYO</h3>
			</div>
		</main>
	</body>
</html>
