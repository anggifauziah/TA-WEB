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
				<ul>
					<li><a class="kotak" href="form-tambah-kategori.php">Tambah</a></li>
				</ul>
				<table border="1" width="95%">
					<tr>
						<th>No</th>
						<th>Tipe kamar</th>
						<th>Harga/malam</th>
						<th colspan="2">Action</th>
					</tr>
					<?php
					//load file koneksi
					include 'koneksi.php';
					$query = "SELECT * FROM kategori_kamar"; //query untuk menampilkan data
					$sql = mysqli_query($connect, $query); //Eksekusi query dari var $query
					$no = 1;
					while ($data = mysqli_fetch_array($sql)) {//ambil semua data dari hasil eksekusi sql
					echo "<tr>";
						echo "<td>".$no++."</td>";
						echo "<td>".$data['tipe_kamar']."</td>";
						echo "<td>".$data['harga']."</td>";
						echo "<td><a href='form-edit-kategori.php?id=".$data['id_kategori']."' class='btn-edit'>Ubah</a></td>";
						echo "<td><a href='proses-hapus-kategori.php?id=".$data['id_kategori']."' class='btn-hapus'>Hapus</a></td>";
					echo "</tr>";
					}
					?>
				</table>
			</div>
		</main>
	</body>
</html>