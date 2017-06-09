<?php
 session_start();
 require_once("header.php");
 require_once("middle.php");
 require_once("koneksi.php"); 
 
 if ((sizeof($cart_harga_barang)<1) && (empty($harga_barang))){
	echo "<center><h2>Keranjang Belanja anda masih kosong</h2></center>";
	require_once("footer.php");
	exit;
 } 
 
 if (sizeof($cart_harga_barang)>0){
 echo "<table align=center bgcolor=#F1F2F3 width=600 border=1 cellspacing=0 cellpadding=0>
	<tr>
	<th>No.</th>
	<th>Product</th> 
	<th>QTY</th>
	<th>Harga</th>
	<th>Subtotal</th>
	</tr>";  
	for($i=0;$i<sizeof($cart_harga_barang);$i++){
	//mengambil field judul  
	//dari tabel buku  
	$strsql="SELECT title   FROM books   WHERE isbn='$cart_harga_barang[$i]'";
	$query=mysql_query($strsql,$koneksi);
	while($data=mysql_fetch_array($query)){
	$cart_judul[$i]=$data[0];
	}
  echo "<tr>
			<td><br>".++$nomor."</td>
			<td>$cart_isbn[$i]<br>$cart_judul[$i]</td>
			<td>$cart_qty[$i]</td>
			<td>$cart_price[$i]</td>
			<td>".$cart_qty[$i]*$cart_price[$i]."</td>
			</tr>";
}  
//menampilkan total Pembelian
	echo "<tr>
			<td colspan=4>Total</td>
			<td colspan=3>Rp $total</td>
			</tr>";
			echo "</table>";
}  
//form pemesanan
	echo "<form name=formCheckout method=post action=prosesCheckout.php>";
	echo "<table align=center bgcolor=#F1F2F3 width=600 border=1 cellspacing=0 cellpadding=0>
		<tr>
		<td colspan=2>Data Pemesan</td>
		</tr>";
		
	echo "<tr>
	<td>Nama</td>
	<td><input name=name type=text size=25></td>
	</tr>
	<tr>
	<td>Address</td>
	<td><input name=address type=text size=50></td>
	</tr>
	<td>City</td>
	<td><input name=city type=text size=20></td>
	</tr>
	<td>State</td>
	<td><input name=state type=text size=20></td>
	</tr>
	<td>Kode Pos</td>
	<td><input name=zip type=text size=5></td>
	</tr>
	<td>Negara</td> 
	<td><input name=country type=text size=20></td>
	</tr>
	<td><input name=Send type=submit id=Send value=Send></td>
	<td><input name=Clear type=reset id=Clear value=Clear></td>
	</tr>  ";
echo "</table>";
echo "</form>";  
require_once("library/footer.php");
?>
		
		