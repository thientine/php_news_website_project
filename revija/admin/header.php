<?php
session_start();

if(!isset($_SESSION["kullaniciId"])) header("Location:../");

$baglanti = mysqli_connect("localhost", "root", "", "webtek");
	
mysqli_query($baglanti,"SET NAMES 'utf8'");
mysqli_query($baglanti,"SET CHARACTER SET utf8_general_ci");

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default">
	    <div class="container-fluid">
		
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/revija/admin">ADMIN PANEL</a>
		</div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategoriler <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="/revija/admin/kategoriler">Kategori İşlemleri</a></li>
					  </ul>
					</li>
			
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Haberler <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="/revija/admin/haberler">Haber İşlemleri</a></li>
					  </ul>
					</li>
					
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Yorumlar <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="/revija/admin/yorumlar">Yorum İşlemleri</a></li>
					  </ul>
					</li>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>

<div class="container">