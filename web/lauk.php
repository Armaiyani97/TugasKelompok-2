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
		<!--?php
		include 'koneksi.php';
	session_start();   
		$strsql="SELECT lauk.*, kategori.nama_kategori FROM lauk, kategori WHERE lauk.id_kategori=kategori.id_kategori AND lauk.id_kategori='$id'";
		$query=mysql_query($strsql,$koneksi);
		<a href=keranjangku.php?id_barang=$data[id_barang]&harga_barang=$data[harga_barang]&jumlah=1&subtotal=$data[harga_barang]> <img src=image/add-to-cart.gif> </a>
	?-->
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
<!--product start here-->
<div class="product">
	<div class="container">
		<div class="product-main">
			  <div class=" product-menu-bar">
			    	<div class="col-md-3 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h1>Lauk-pauk</h1>
							<div class="row1 scroll-pane">
								<div class="col col-4">
									<label><i></i>Daftar Lauk-pauk</label>
								</div>
								<div class="col col-4">								
									<label><i></i>- Ikan Tongkol</label><br>
									<label><i></i>- Telur</label><br>
									<label><i></i>- Daging Sapi</label><br>		
									<label><i></i>- Daging Kambing</label><br>
									<label><i></i>- Tempe</label><br>
									<label><i></i>- Ikan Mujair</label><br>
									<label><i></i>- Ikan Bandang</label><br>
									<label><i></i>- Daging Kerbau </label><br>
									<label><i></i>- Daging Ayam</label><br>				
								</div>
							</div>
						</section>
					</div>
				</div>
			  </div>	
			  <div class="col-md-9 product-block">
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="checkout2.php"><img src="image/l12.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>ikan Tongkol</h3>
								<p>Stock : 5 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.20.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/telur.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Telur</h3>
								<p>Stock : 7 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.5000/Kg</span>
						</div>
					</div>
				 </div>
			     <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/sapi.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Daging Sapi</h3>
								<p>Stock : 17 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.50.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/kambing.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Daging Kambing</h3>
								<p>Stock : 10 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.40.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/tempe.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Tempe</h3>
								<p>Stock : 4 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.5000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/mujahir.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Ikan Mujair</h3>
								<p>Stock : 11 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.15.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/bandang.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Bandang</h3>
								<p>Stock : 15 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.17.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/kerbau.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Daging Kerbau</h3>
								<p>Stock : 13 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.70.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single.html"><img src="image/ayam.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3>Daging Ayam</h3>
								<p>Stock : 20 Kg</p>
						</div>
						<div class="srch">
							<span>Rp.40.000/Kg</span>
						</div>
					</div>
				 </div>
			      <div class="clearfix"> </div>
			  </div>
		</div>
	</div>
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