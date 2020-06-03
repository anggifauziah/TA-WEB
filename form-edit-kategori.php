<?php
include 'koneksi.php';
$id = $_GET['id'];
$kamar  = mysqli_query($connect,"SELECT * FROM kategori_kamar WHERE id_kategori='$id'");
$row = mysqli_fetch_array($kamar);
?>

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
					<li><a href="index.php">Data kamar</a></li>
				</ul>
				<ul>
					<h1></h1>
					<li><a href="booking.php">Booking</a></li>
				</ul>
			</div>
			<div class="content">
				<form action="proses-edit-kamar.php" method="POST">
					<div class="formatas">
						<p>Data Kamar</p>
					</div>
					<input type="hidden" readonly value="<?php echo $row['id_kategori']; ?>" name="id">
					<label for="country">Tipe kamar</label>
					<input type="text" id="tipe" name="tipe" placeholder="Tipe Kamar" value="<?php echo $row['tipe_kamar'];?>">
					<label for="rname">HARGA</label>
					<input type="text" id="rname" name="harga" placeholder="Harga" value="<?php echo $row['harga'];?>">
					<input type="submit" name="Submit" value="save">
					<a href="kategori.php"><button type="button">cancel</button></a>
				</form>
			</div>
		</main>
	</body>
</html>
