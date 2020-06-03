<?php
//load file koneksi.php
include "koneksi.php";
//ambil data yang dikirim dari form
$id_kamar 	= $_POST['id_kamar'];
$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$nohp	 	= $_POST['nohp'];
$cekin 		= $_POST['CekIn'];
$cekout 	= $_POST['CekOut'];
$total 		= $_POST['total'];



// query SQL untuk insert data
$query = mysqli_query($connect,"INSERT INTO booking SET id_kamar='$id_kamar',nama_pemesan='$nama',alamat='$alamat',no_hp='$nohp',cekin='$cekin',cekout='$cekout',total_bayar='$total'");

if ($query) { //jika $query dijalankan
  $kamar = mysqli_query ($connect,"UPDATE kamar SET status_kamar='Terisi' where id_kamar='$id_kamar'"); //update kamar kosong menjadi terisi
}

// mengalihkan ke halaman masuk.php
header("location:booking.php");
?>
