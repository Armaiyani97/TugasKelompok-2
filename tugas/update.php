<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Update Harga || DaganganKu</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoplist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<p><font face="cooper black" size="10" color="red"><b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DaganganKu</b></font>
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="top-nav">
				<div class="content white">
	              <nav class="navbar navbar-default" role="navigation">
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					        </button>
					        
					    </div>
					    <!--/.navbar-header-->
					 <div class="" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
							
					        	   <li><a href="index.html">Home</a></li>
								   <li><a href="buah.html">Buah</a></li>
								   <li><a href="sayur.html">Sayur</a></li>
								   <li><a href="lauk.html">Lauk</a></li>
								   <li><a href="bumbu.html">Bumbu Dapur</a></li>
								   <li><a href="about.html">About</a></li>
								   <li><a href="kontak.html">Contact</a></li>
								   <li><a href="harga.php">Daftar Harga</a></li>
								   <li><a href="notifikasi.html">Notifikasi</a></li>
								   
					       </ul>
					 </div>
					    <!--/.navbar-collapse-->
					</nav>
					<!--/.navbar-->
				</div>
			</div>
			<div class="header-right">
				<div class="search">
					<div class="search-text">
					    <input class="serch" type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
					</div>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3>
							<img src="images/cart.png" alt=""/>
							<div class="total">
							<span class="simpleCart_total"></span></div>
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					</div>    
					<div class="head-signin">
						<h5><a href="login.html"><i class="hd-dign"></i>Sign in</a></h5>
					</div>              
                     <div class="clearfix"> </div>					
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--product start here-->
<br>
<br>
<br>

<style>   
    table{
        width: 30%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #36c2ff;
    }
</style>
 
			  
			  
<?php

	include 'koneksi.php';
	$nama_barang         = $_GET['nama_barang'];
	$product  			 = mysqli_query($koneksi, "select * from product where nama_barang='$nama_barang'");
	$row      			 = mysqli_fetch_array($product);
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
            <input type="hidden" value="<?php echo $row['nama_barang'];?>" name="nama_barang">
            <table>
                <tr><td>Nama Barang</td><td><input type="text" value="<?php echo $row['nama_barang'];?>" name="nama_barang"></td></tr>
                <tr><td>Harga Lama</td><td><input value="<?php echo $row['harga_lama'];?>" type="text" name="harga_lama"></td></tr>
                <tr><td>Harga Baru</td><td><input value="<?php echo $row['harga_baru'];?>" type="text" name="harga_baru"></td></tr></td>
				<td align=center colspan="2"><button type="submit" value="Simpan">Submit</button></td>
            </table>
        </form>
    </body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
<!--product end here-->
<!--footer strat here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="ftr-grids-block">
				<div class="col-md-8 footer-grid-icon" style="padding-left: 430px;">
					<ul>
						<li><a href="#"><span class="u-tub"> </span></a></li>
						<li><a href="#"><span class="instro"> </span></a></li>
						<li><a href="#"><span class="twitter"> </span></a></li>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="print"> </span></a></li>
					</ul>
				</div>
		    <div class="clearfix"> </div>
		  </div>
		  <div class="copy-rights">
		     <p>© 2017 DaganganKu. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		   </div>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</html>