<?php
//load file koneksi.php
include "koneksi.php";
//ambil data yang dikirim dari form
$id 	= $_POST['id'];
$tipe 	= $_POST['tipe'];
$harga 	= $_POST['harga'];

// query SQL untuk insert data
$query = mysqli_query($connect,"INSERT INTO kategori_kamar SET tipe_kamar='$tipe',harga='$harga'");
// mengalihkan ke halaman masuk.php
header("location:kategori.php");
?>
