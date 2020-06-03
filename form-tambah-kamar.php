<!DOCTYPE html>
<html>
	<head>
		<title>project dpw</title>
		<link rel="stylesheet" type="text/css" href="css/styleisikam.css">
		<link rel="stylesheet" type="text/css" href="css/styleform.css">
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
				<ul class="color_sidebar">
					<h1></h1>
					<li><a href="kamar.php">Data kamar</a></li>
				</ul>
				<ul>
					<h1></h1>
					<li><a href="booking.php">Booking</a></li>
				</ul>
			</div>
			<div class="content">
				<form action="proses-tambah-kamar.php" method="POST">
					<?php
					include 'koneksi.php';
					$query = "SELECT * FROM kategori_kamar"; //query untuk menampilkan data
					$sql = mysqli_query($connect, $query); //Eksekusi query dari var $query
					?>
					
					<div class="formatas">
						<p>Data Kamar</p>
					</div>
					<label for="no_kamar">No Kamar</label>
					<input type="text" id="no_kamar" name="no_kamar" placeholder="No Kamar" required>
					<label for="id_kategori">Tipe kamar</label>
					<select class="" name="id_kategori" id="id_kategori" required>
						<option value="" selected disabled>::. Pilih Kategori .::</option>
						<?php
						foreach ($sql as $key) {
							echo '<option value="'.$key['id_kategori'].'">'.$key['tipe_kamar'].'</option>';
						}
						 ?>
					</select>
					<input type="submit" name="Submit" value="save">
					<a href="kamar.php"><button type="button">cancel</button></a>

				</form>
			</div>
		</main>
	</body>
</html>
