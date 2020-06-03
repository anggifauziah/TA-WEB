<?php
include 'koneksi.php'; //menambahkan koneksi ke dalam php
$id 	= $_POST['data']; //membuat variabel id dengan mendapat kiriman value dari ajax // data dari data: .data. 

$kamar = mysqli_query($connect,"SELECT * FROM kamar WHERE id_kategori='$id' AND status_kamar = 'Kosong'"); // menampilkan data dari tabel kamar dengan kondisi id id_kategori berdasarkan id dan kamar yang kosong

$tag = ''; // membuat variabel kosong
$tag .= "<option value='' selected disabled>::. Pilih Kamar.::</option>"; // mengisi $tag dengan tag html

while ($getkamar = mysqli_fetch_array($kamar)) { // karena data yang didapat array, maka di pisah satu satu
  $tag .= "<option value='" . $getkamar['id_kamar'] . "'>" . $getkamar['no_kamar'] . "</option>"; // menampilkan $tag yang berisi variabel $getkamar
}

echo $tag; // menampilkan $tag
 ?>
