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
<!--sign in start here-->
<div class="signin" style="padding-top: 30px;">
	<div class="container">
		<div class="signin-main">
		<form action="auth.php" method="post">
			<h1>Daftar</h1>
			Biasakan berbuat benar<br>
			Anda wajib mengisi semua data dengan benar!
			<h2>* Wajib diisi</h2>
			<form>
				<input type="hidden" name="auth" value="register">
				<h5> Username *</h5>
				<input type="text" class="form-control input-sm chat-input" placeholder="Username" name="username" />
				<h5> Email *</h5>
           		<input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Email" name="email" />
           		<h5> Password *</h5>
           		<input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="Password" style="margin-bottom: 16px; margin-top: 0px;"/>
           		<h5> Konfirmasi Password</h5>
           		<input type="password" id="userPassword" name="konfirmasi_password" class="form-control input-sm chat-input" placeholder="konfirmasi Password" style="margin-top: 0px; margin-right: 16px;"/>
				<span class="checkbox1">
				<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Dengan mendaftar, Anda setuju dengan Syarat, Ketentuan dan Kebijakan dari DaganganKu dan Kebijakan Privasi.</label>
			    </span>
				<input type="submit" value="Submit">
				<a href="login.php"><br><br><h10>kamu sudah mempunyai akun?</h10></a>
			</form>
		</div>
	</div>
</div>
<!--sign in end here-->
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