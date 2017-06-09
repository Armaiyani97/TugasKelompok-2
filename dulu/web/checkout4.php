<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Home || DaganganKu</title>
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
<script src='https://jt-scriptsource.googlecode.com/svn/trunk/jquery.cookie.js' type='text/javascript'/>
<script src='https://jt-scriptsource.googlecode.com/svn/trunk/simplecart.js' type='text/javascript'/>
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
		
		<?
		include 'koneksi.php';
	session_start();
        if(!session_is_registered("cart_id_barang")){
        session_register("cart_id_barang");
        session_register("cart_nama_barang");
        session_register("cart_image");
        session_register("cart_harga_barang");
        session_register("cart_jumlah");
        session_register("cart_subtotal");
        session_register("total");
        $cart_id_barang=array();
        $cart_nama_barang=array();
        $cart_image=array();
        $cart_harga_barang=array();
        $cart_jumlah=array();
        $cart_subtotal=array();
        }
	?>
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<p><font face="cooper black" size="10" color="#EA572D"><b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DaganganKu</b></font>
<!-- <p><font face="harrington" size="4" color="black"><b>Menjual Aneka Sayur, Buah, Bumbu dan Lauk-pauk~</b></font></p> -->
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
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
							
					        	    <li><a href="index.php">Home</a></li>
					        	   <li><a href="about.php">About</a></li>
								   <li><a href="buah.php">Buah</a></li>
								   <li><a href="sayur.php">Sayur</a></li>
								   <li><a href="lauk.php">Lauk</a></li>
								   <li><a href="bumbu.php">Bumbu Dapur</a></li>
								   <li><a href="harga.php">Daftar Harga</a></li>
								   <li><a href="kontak.php">Contact</a></li>
								   <li><a href="notifikasi.php">Notifikasi</a></li>
								   
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
						<a href="checkout.php">
						<h3>
							<img src="images/cart.png" alt=""/>
							<div class="total">
							<span class="simpleCart_total"></span></div>
							<script>
								simpleCart.currency({ 
								code: "IDR" , 
								name: "Indonesian Rupiah" , 
								symbol: "Rp" , 
								delimiter: "." , 
								decimal: "," , 
								after: false , 
								accuracy: 2 
								});
							</script>
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Belanjaanku</a></p>
					</div>    
					<div class="head-signin">
						<h5><a href="login.php"><i class="hd-dign"></i>Masuk</a></h5>
					</div>              
                     <div class="clearfix"> </div>					
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1>KeranjangKu</h1>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
				
			<div class="in-check" >
				<ul class="unit">
					<li><span>Item</span></li>
					<li><span>Nama Produk</span></li>		
					<li><span>Harga/Kg</span></li>
					<li><span>Detil Pesanan</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header simpleCart_shelfItem">
					<div class="close1"></div>
						<li class="ring-in"><a href="buah.html" ><img src="image/b12.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Melon</span></li>
						<li><span class="item_price">Rp 20000/Kg</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">Tambahkan ke Keranjang</a></li>				
					<div class="clearfix"> </div>
				</ul>
				<!--<ul class=" cart-header1 simpleCart_shelfItem">
					<div class="close2"> </div>
						<li class="ring-in"><a href="single.html" ><img src="images/c2.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Watches</span></li>
						<li><span class="item_price">$ 300.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>						
						<div class="clearfix"> </div>
				</ul>
				<ul class="cart-header2 simpleCart_shelfItem">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single.html" ><img src="images/c3.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Handbag</span></li>
						<li><span class="item_price">$ 360.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>						
						<div class="clearfix"> </div>
				</ul>/-->
				
				<center><h3><a href="pembayaran.php"><i class="hd-dign"></i>Pembayaran</a></h3></center>
			</div>
			</div>  
		 </div>
		</div>
	</div>
<!--end-ckeckout-->
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