<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_barang  = $_POST['nama_barang'];
$harga_lama   = $_POST['harga_lama'];
$harga_baru   = $_POST['harga_baru'];
// query SQL untuk insert data
$query=("UPDATE product SET nama_barang='$nama_barang', harga_lama='$harga_lama', harga_baru='$harga_baru' WHERE nama_barang='$nama_barang'") or die(mysql_error());
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:harga.php");
?>