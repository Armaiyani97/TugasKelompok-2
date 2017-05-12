<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_barang   		= $_POST['id_barang'];
$nama_barang 		= $_POST['nama_barang'];
$harga_lama   = $_POST['harga_lama'];
$harga_baru     = $_POST['harga_baru'];
// query SQL untuk insert data
$query="UPDATE product SET id_barang='$id_barang', nama_barang='$nama_barang', harga_lama='$harga_lama', harga_baru='$harga_baru' WHERE id_barang='$id_barang'") or die(mysql_error());
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:profil_barang.php");
?>