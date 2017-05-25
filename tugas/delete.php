<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nama_barang   = $_GET['nama_barang'];
// query SQL untuk insert data
$query="DELETE from product where $nama_barang   = $_GET['nama_barang'];
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:harga_barang.php");
?>