<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id 	= $_POST['id'];
$idkm 	= $_POST['idkm'];
$sbooking   = $_POST['booking'];
$skamar  = $_POST['kamar'];

// query SQL untuk update data
$booking = mysqli_query ($connect,"UPDATE booking SET status_booking='$sbooking' where id_booking='$id'");
$kamar = mysqli_query($connect,"UPDATE kamar SET status_kamar='Kosong' where id_kamar=$idkm");

// mengalihkan ke halaman booking.php
header("location: booking.php");
?>
