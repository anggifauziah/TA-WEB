<?php
include 'koneksi.php'; // menambahkan koneksi

  $id = $_POST['id']; // mengambil value id
  $kategori = mysqli_query($connect,"SELECT * FROM kategori_kamar WHERE id_kategori='$id'"); //mendapatkan isi dari tabel kategori_kamar

$getKategori = mysqli_fetch_assoc($kategori); //karena berbentuk objek
echo $getKategori['harga']; //menampilkan data harga melalui $getKategori

 ?>
