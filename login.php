<?php
//mengambil pesan yang dikirimkan
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
?>

<script language="JavaScript">
	alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
</script>

<?php
}else if($_GET['pesan'] == "logout"){
?>

<script language="JavaScript">
	alert('Anda Berhasil Logout!');
</script>

<?php
}else if($_GET['pesan'] == "belum_login"){
	echo "Anda harus login untuk mengakses halaman admin";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="learning fun online classes with professional teachers">
		<meta name="keyword" content="learning,education,kids,school,online class">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login Hotel Trunojoyo</title>
		<link rel="stylesheet" href="css/login.css">
		<!-- font family -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu|Pacifico&display=swap">
	</head>
	<body>
		<nav>
			<h1>HOTEL TRUNOJOYO</h1>
			<div class="box">
				<div class="images">
				</div>
				<div class="main">
					<form action="login-proses.php" method="POST">
						<h3><img src="picture/login.png"></h3>
						<h2>LOGIN ADMIN</h2>
						<label for="username">Username :</label>
						<input type="username" name="username" id="username" placeholder="Username" required>
						<label for="password">Password :</label>
						<input type="password" name="password" id="password" placeholder="Password" required>
						<button type="submit"><strong>LOGIN</strong></button>
						<div class="footer-img">
							<img src="picture/footer_hotel.jpeg">
						</div>
					</form>
				</div>
			</div>
		</nav>
	</body>
</html>
