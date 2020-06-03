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
				<ul class="color_sidebar">
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
				<form action="proses-tambah-kategori.php" method="POST">
					<div class="formatas">
						<p>Data Kategori</p>
					</div>
					<label for="country">Tipe kamar</label>
					<input type="text" id="tipe" name="tipe" placeholder="Tipe Kamar" required>
					<label for="rname">HARGA</label>
					<input type="text" id="rname" name="harga" placeholder="Harga" required>
					<input type="submit" name="Submit" value="save">
					<a href="kategori.php"><button type="button">cancel</button></a>
				</form>
			</div>
		</main>
	</body>
</html>
