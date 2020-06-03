<?php
session_start(); // memulai session
include "koneksi.php"; // menambahkan koneksi
$username = $_POST['username']; // mengambil data
$password = $_POST['password']; // mengambil data

$sql = mysqli_query($connect,"SELECT * FROM user_login WHERE username='$username' AND password='$password'"); //mengambil data dari DB
$cek = mysqli_num_rows($sql);

if ($cek > 0) { //jika $cek lebih dari 0
  $_SESSION['username'] = $username; //membuat session
  $_SESSION['status'] = "login";
  header("location:index.php"); // redirect index.php
}else{ // selain itu
	header("location:login.php?pesan=gagal"); // pindah login
}
?>