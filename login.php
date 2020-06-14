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
<html>
<head>
	<title>Login Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<header> 
		<h1>Hotel Trunojoyo</h1>
	</header>
<main> 
		
			<div class="sidebar">
			<img src="picture/login.jpeg" height="400px" width="400px">

			</div>
			<div class="content">
			<form action="login-proses.php" method="POST">
						<img class="ring" src="picture/user.png" height="60px" width="60px">
						<h2>LOGIN ADMIN</h2>
						<label for="username">Username :</label>
						<input type="username" name="username" id="username" placeholder="Username" required>
						<label for="password">Password :</label>
						<input type="password" name="password" id="password" placeholder="Password" required>
						<button type="submit"><strong>LOGIN</strong></button>
						</div>
					</form>

			</div>

		
	</main>
	<footer> </footer>

</body>
</html>