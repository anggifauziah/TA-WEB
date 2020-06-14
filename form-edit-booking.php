<?php
include 'koneksi.php';
$id = $_GET['id'];
$status  = mysqli_query($connect,"SELECT * FROM booking bk JOIN kamar km ON bk.id_kamar = km.id_kamar WHERE id_booking='$id'");
$row = mysqli_fetch_array($status);
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
				<ul>
					<h1></h1>
					<li><a href="index.php">Data kamar</a></li>
				</ul>
				<ul class="color_sidebar">
					<h1></h1>
					<li><a href="booking.php">Booking</a></li>
				</ul>
			</div>
			<div class="content">
				<form action="proses-edit-booking.php" method="POST">
					<div class="formatas">
						<p>Data Kamar</p>
					</div>
					<input type="hidden" readonly value="<?php echo $row['id_booking']; ?>" name="id">
					<input type="hidden" readonly value="<?php echo $row['id_kamar']; ?>" name="idkm">
					<label for="country">Status Booking</label>
					<select name="booking">
						<option> Booking</option>
						<option> Selesai</option>
					</select>
					<!-- <label for="rname">Status kamar</label> -->
					<input type="hidden" id="kamar" name="kamar" placeholder="Status kamar" value="<?php echo $row['status_kamar'];?>">
					<input type="submit" name="Submit" value="save">
					<a href="booking.php"><button type="button">cancel</button></a>
				</form>
			</div>
		</main>
	</body>
</html>
