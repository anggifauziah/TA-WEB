<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id 	= $_POST['id'];
$tipe   = $_POST['tipe'];
$harga  = $_POST['harga'];

// query SQL untuk update data
$kamar = mysqli_query ($connect,"UPDATE kategori_kamar SET tipe_kamar='$tipe',harga='$harga' where id_kategori='$id'");
// mengalihkan ke halaman index.php
header("location: kategori.php");
?>
