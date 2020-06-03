<?php
//load file koneksi.php
include "koneksi.php";
//ambil data yang dikirim dari form
$no_kamar 		= $_POST['no_kamar'];
$id_kategori 	= $_POST['id_kategori'];

// query SQL untuk insert data
$query = mysqli_query($connect,"INSERT INTO kamar SET no_kamar='$no_kamar',id_kategori='$id_kategori'");
// mengalihkan ke halaman masuk.php
header("location:kamar.php");
?>
