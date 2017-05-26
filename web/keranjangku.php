<?php
session_start();
require_once("header.php");
//require_once("middle.php");
require_once("koneksi.php"); 
//jika aksi update item dipilih 
if ((sizeof($cart_id_barang)>0) && ($aksi=="update")){
	for($i=0;$i<sizeof($cart_id_barang);$i++) {
		array_splice($cart_jumlah,$i,1,$jml[$i]); 
	}  
 } 
 
 //jika aksi hapus dipilih 
 if ((!empty($id_barang)) && ($aksi=="hapus")){
	for($i=0;$i<sizeof($cart_id_barang);$i++){
		if($cart_id_barang[$i]==$id_barang){
			array_splice($cart_id_barang,$i,1);
			array_splice($cart_nama_barang,$i,1);    
			array_splice($cart_harga_barang,$i,1);    
			array_splice($cart_jumlah,$i,1);    
			array_splice($cart_subtotal,$i,1);    
			break;
		}
	}
echo "<center><h2>Data Item telah dihapus dari keranjang belanja</h2></center>";
}   

//jika keranjang masih kosong
//tampilkan pesan kosong

if ((sizeof($cart_id_barang)<1) && (empty($id_barang))){
  echo "<center><h2>Keranjang Belanja anda masih kosong</h2></center>";
  require_once("footer.php");
  exit;
}  

// mengecek apakah buku yang akan dibeli 
// telah ada di dalam keranjang 
// jika sudah ada tampilkan pesan 
// jika belum ada masukkan datanya ke array/keranjang 

if(in_array($id_barang, $cart_id_barang)){
echo "<center><h2>Data sudah ada di keranjang Belanja</h2></center>";
  require_once("footer.php");
  exit;
}
else{
	if(!empty($id_barang)){
		array_push($cart_id_barang,$id_barang);
		array_push($cart_harga_barang,$harga_barang);
		array_push($cart_jumlah,$qty);
		array_push($cart_subtotal,$subtotal);
	}
} 

//penomoran item barang dan total Pembelian
$nomor=0;
$total=0;

//membuat table untuk judul keranjang belanja 
echo "<table align=center bgcolor=#F2F2F9 width=600 border=1 cellspacing=0 cellpadding=10>
  <tr>
	<th colspan=2>KERANJANG BELANJA</th>
  </tr>
 </table>";
 
//membuat table untuk menampilkan data dari keranjang belanja 
 echo "<form method=get action=$PHP_SELF>";
 echo "<form method=post action=$PHP_SELF>";
 echo "<table align=center bgcolor=#F2F2F9 width=600 border=1 cellspacing=0 cellpadding=0>
 <tr>  
 <th>No.</th>
 <th>Product</th>
 <th>QTY</th>
 <th>Harga</th>
 <th>Subtotal</th>
 </tr>";  

	for($i=0;$i<sizeof($cart_id_barang);$i++){
		//mengambil field judul  
		//dari tabel buah
		$strsql="SELECT title,image   FROM buah  WHERE id_barang='$cart_id_barang[$i]'";
		$query=mysql_query($strsql,$koneksi);
		while($data=mysql_fetch_array($query)){ 
		$cart_judul[$i]=$data[0];
		$cart_image[$i]=$data[1];
	}
}
	for($i=0;$i<sizeof($cart_id_barang);$i++){
		//mengambil field judul  
		//dari tabel sayur
		$strsql="SELECT title,image   FROM sayur  WHERE id_barang='$cart_id_barang[$i]'";
		$query=mysql_query($strsql,$koneksi);
		while($data=mysql_fetch_array($query)){ 
		$cart_judul[$i]=$data[0];
		$cart_image[$i]=$data[1];
	}
}
	for($i=0;$i<sizeof($cart_id_barang);$i++){
		//mengambil field judul  
		//dari tabel lauk
		$strsql="SELECT title,image   FROM lauk  WHERE id_barang='$cart_id_barang[$i]'";
		$query=mysql_query($strsql,$koneksi);
		while($data=mysql_fetch_array($query)){ 
		$cart_judul[$i]=$data[0];
		$cart_image[$i]=$data[1];
	}
}	
	for($i=0;$i<sizeof($cart_id_barang);$i++){
		//mengambil field judul  
		//dari tabel bumbu
		$strsql="SELECT title,image   FROM bumbu  WHERE id_barang='$cart_id_barang[$i]'";
		$query=mysql_query($strsql,$koneksi);
		while($data=mysql_fetch_array($query)){ 
		$cart_judul[$i]=$data[0];
		$cart_image[$i]=$data[1];
	}
}
	
echo "<tr>
		<td><img src=image/$cart_image[$i] width=60 height=80 border=0></td>
		<td>$cart_id_barang[$i]<br>$cart_nama_barang[$i]</td>
		<td><input type=text size=2 maxlength=2 name=jml[] value=$cart_jumlah[$i]></td>
			<td>$cart_harga_barang[$i]</td>
			<td>".$cart_jumlah[$i]*$cart_harga_barang[$i]."</td>
			<td><a  class=menu_left href=$PHP_SELF?aksi=hapus&isbn=$cart_id_barang[$i]>[Hapus]</a></td>
		</tr>";
		$total=$total+($cart_jumlah[$i]*$cart_harga_barang[$i]); 
//menampilkan total Pembelian 
echo "<tr>
		<td colspan=4>Total</td>
		<td colspan=4>$. $total</td>
		</tr>  <tr bgcolor=#FFFFFF>
		<input name=aksi type=hidden id=aksi value=update>
		<td colspan=7><input type=submit name=Submit value=\"Update Jumlah\"></td>
		</tr>";
 echo "</table>";
 echo "</from>";
 
 require_once("footer.php");
?>