<?php
include 'koneksi.php';
$id_barang         = $_GET['id_barang'];
$product  = mysqli_query($koneksi, "select * from product where id_barang='$id_barang'");
$row        = mysqli_fetch_array($product);
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Harga</title>
    </head>
    <body>
        <form method="post" action="edit.php">
            <input type="hidden" value="<?php echo $row['id_barang'];?>" name="id_barang">
            <table>
                <tr><td>Id Barang</td><td><input type="text" value="<?php echo $row['id_barang'];?>" name="id_barang"></td></tr>
                <tr><td>Nama Barang</td><td><input type="text" value="<?php echo $row['nama_barang'];?>" name="nama_barang"></td></tr>
                <tr><td>Harga Lama</td><td><input value="<?php echo $row['harga_sebelumnya'];?>" type="text" name="harga_lama"></td></tr>
                <tr><td>Harga Baru</td><td><input value="<?php echo $row['harga_sekarang'];?>" type="text" name="harga_baru"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Submit</button>
                        <a href="harga_barang.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>