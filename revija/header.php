<?php
	$baglanti = mysqli_connect("localhost", "root", "", "webtek");
	
	mysqli_query($baglanti,"SET NAMES 'utf8'");
	mysqli_query($baglanti,"SET CHARACTER SET utf8_general_ci");
	
	if(!isset($_SESSION)) {
     session_start();
	}
?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
  <title></title>
  <meta name = "format-detection" content = "telephone=no" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!--meta info-->
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="shortcut icon" type="image/x-icon" href="images/fav_icon.ico">
  <!--stylesheet include-->
  <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
  <link rel="stylesheet" type="text/css" media="all" href="plugins/layerslider/css/layerslider.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/custom.css">
  <!--modernizr-->
  <script src="js/jquery.modernizr.js"></script>
  
</head>
<body class="wide_layout">
  
	<!--==============================header=================================-->
	<header role="banner" class="header header-main">
		  <div class="h_bot_part">
			<div class="container">
			  <div class="row">
				<div class="col-xs-12">
				  <div class="clearfix">
					<a href="./" class="f_left logo"><img src="images/logo_main.png" alt=""></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <!--main menu container-->
		<div class="menu_wrap">
			<div class="menu_border">
			  <div class="container clearfix menu_border_wrap">
				<!--button for responsive menu-->
				<button id="menu_button">
				  Menu
				</button>
				<!--main menu MENÜ menü-->
				<nav role="navigation" class="main_menu menu_var2">  
				  <ul>
					<?php

						$kategoriler = mysqli_query($baglanti, "SELECT * FROM kategoriler");
						
						while($kategori = mysqli_fetch_array($kategoriler)){
					?>
					
					<li><a class="<?php echo $kategori["CSSClass"]; ?>-menu" href="./kategoriler.php?kategoriId=<?php echo $kategori["Id"]; ?>"><?php echo $kategori["Ad"]; ?></a></li>
					
					<?php } ?>
					
					<li>
						<?php
							if(isset($_SESSION["kullaniciId"])){
						?>
						
						<a class="cikis-menu" href="./logout.php">ÇIKIŞ</a>
						
						<?php } else { ?>
						
						<a class="giris-menu" href="./login.php">GİRİŞ</a>
						
						<?php } ?>
					</li>
					
					<?php
						if(!isset($_SESSION["kullaniciId"])){
					?>
					<li>						
						<a class="ishayati-menu" href="./register.php">KAYDOL</a>
					</li>
					<?php } if(isset($_SESSION["admin"]) && $_SESSION["admin"] == 1) { ?>
					<li>						
						<a class="saglik-menu" href="./admin">PANEL</a>
					</li>
					<?php } ?>
				  </ul>
				</nav>
			  </div>
			</div>
		</div>
	</header>