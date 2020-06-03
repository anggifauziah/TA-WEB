<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query= mysqli_query($connect,"DELETE FROM kategori_kamar WHERE id_kategori=$id");
// mengalihkan ke halaman index.php
header("location: kategori.php");
?>
