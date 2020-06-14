<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>project dpw</title>
	<link rel="stylesheet" type="text/css" href="css/styleisiboo.css">
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
					<li><a href="kamar.php">Data Kamar</a></li>
				</ul>
				<ul class="color_sidebar">
					<h1></h1>
					<li><a href="booking.php">Booking</a></li>
				</ul>
			</div>
			<div class="content">
				<form action="proses-tambah-booking.php" method="POST">
					<?php
					include 'koneksi.php';
					$query = "SELECT * FROM kategori_kamar"; //query untuk menampilkan data
					$sql = mysqli_query($connect, $query); //Eksekusi query dari var $query
					?>
					<div class="formatas">
						<p>Data pelanggan</p>
					</div>
					<label for="lname">Nama-Lengkap</label>
					<input type="text" id="lname" name="nama" placeholder="Nama Lengkap" required>

					<label for="subject">Alamat-Lengkap</label>
					<input type="text" id="subject" name="alamat" placeholder="Alamat Lengkap" required>

					<label for="fname">No Handphone</label>
					<input type="text" id="fname" name="nohp" placeholder="No Handphone" required>
					<label for="id_kategori">Tipe kamar</label>
					<select class="" name="id_kategori" id="id_kategori" required>
						<option value="" selected disabled>::. Pilih Kategori .::</option>
						<?php
						foreach ($sql as $key) { //menampilkan array dari $sql dialiaskan ke $key
							echo '<option value="'.$key['id_kategori'].'">'.$key['tipe_kamar'].'</option>'; // $key['kolom dari database']
						}
						?>
					</select>

					<!-- <label for="harga">Harga</label> -->
					<input type="hidden" id="harga" name="harga" required>

					<label for="id_kamar">Nomor Kamar</label>
					<select class="" name="id_kamar" id="id_kamar" required>
						<option value="" selected disabled>::. Pilih Kamar .::</option>
					</select>

					<label for="CekIn">Cek in</label>
					<input type="date" id="CekIn" name="CekIn" placeholder="Cek In" required>

					<label for="CekOut">Cek out</label>
					<input type="date" id="CekOut" name="CekOut" placeholder="Cek Out" required>

					<!-- <label for="CekOut">Selisih</label> -->
					<input type="hidden" id="selisih" name="Selisih" placeholder="Selisih" required>

					<label for="total">TOTAL BAYAR</label>
					<input type="text" id="total" name="total" required>
					<input type="submit" name="Submit" value="save">
					<a href="booking.php"><button type="button">cancel</button></a>
				</form>
			</div>
		</main>
		<script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
		<script type="text/javascript">
		// Menampilkan Kamar Kosong
		$("#id_kategori").change(function(){ //menggunakan function onchange yang mengambil #id_kategori
			var data = $("#id_kategori").val(); // membuat variabel data yang berisi value dari #id_kategori
			$.ajax({ //menggunakan ajax untuk mengirim data
				type: 'POST',
				url: "getKamarKosong.php", // url yang dituju
				data: {data: data}, // variabel data : alias yang digunakan
				cache: false,
				success: function(data){
					$("#id_kamar").html(data); //menampilkan data yang dikirimkan dari url getKamarKosong.php
				}
			});
		});

		$(document).ready(function() { // ketika halaman sudah selesai terload, maka fungsi dijalankan
			$('#CekIn, #CekOut').on('change date', function () { //ketika id Cekin dan Cekout berubah valuenya, Date menunjukkan type input data
				getHarga(); //memanggil fungsi getHarga
			});
		});

		var harga = 0; // deklarasi variabel harga samadengan 0

		$('#id_kategori').change(function(){ // ketika mengklik id id_kategori / merubah valuenya maka fungsi dijalankan
			getHarga(); //memanggil fungsi getHarga
			console.log(harga); //menampilkan hasil dari variabel data (menampilkan harga)
		});

		function getHarga(){ // membuat fungsi getHarga
				var id = $('#id_kategori').val(); // mendapatkan value dari id_kategori dan dimasukkan ke variabel id
				$.post("getHargaKamar.php", {id:id}).done(function(data){ // mengirimkan data ke url getHargaKamar
					$('#harga').val(data); // mengisi id harga dengan variabel data
					if ( ($("#CekIn").val() != "") && ($("#CekOut").val() != "")) { // pengecekan ketika id cekIN dan cekout tidak kosong
						var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
						var firstDate = new Date($("#CekIn").val()); // mendapatkan tanggal dari id CekIn
						var secondDate = new Date($("#CekOut").val()); // mendapatkan tanggal dari id CekOut
						var diffDays = Math.round(Math.round((secondDate.getTime() - firstDate.getTime()) / (oneDay) + 1)); // mengambil selisih tanggal awal dan akhir
						$("#selisih").val(diffDays); // mengisi id selisih dengan variabel diffDays
							var total = diffDays*data; // membuat variabel total, mengkalikan variabel diffDays dan data
							$('#total').val(total); // mengisi id total dengan value dari variabel total
					}
				});
		}

		function setHarga(){ //membuat fungsi setHarga
		 harga = $('#harga').val(); //set variabel harga dari id harga
		}

		</script>
</body>
</html>