<?php

if(!isset($_SESSION)) {
     session_start();
}

if(isset($_SESSION["kullaniciId"])){
	header("Location:index.php");
}

$baglanti = mysqli_connect("localhost", "root", "", "webtek");

mysqli_query($baglanti,"SET NAMES 'utf8'");
mysqli_query($baglanti,"SET CHARACTER SET utf8_general_ci");

if(isset($_POST["kullaniciEmail"]) && isset($_POST["kullaniciSifre"])){
	$kullaniciEmail = $_POST["kullaniciEmail"];
	$kullaniciSifre = $_POST["kullaniciSifre"];

	mysqli_query($baglanti, "INSERT INTO `kullanicilar` (`Id`, `Email`, `Sifre`, `IsAdmin`) VALUES (NULL, '$kullaniciEmail', '$kullaniciSifre', b'0');");
	
	$kullanici = mysqli_fetch_array(mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE Email = '" . $kullaniciEmail . "' AND Sifre = '" . $kullaniciSifre . "'"));
	echo $kullanici["Id"];
	$_SESSION["kullaniciId"] = $kullanici["Id"];

	header("Location:index.php");
}

?>


<!--==============================header=================================-->
<?php include "header.php" ?>


<!--==============================content================================-->

<br/><br/>

<div class="content">
    <div class="container">
        <div class="row">
			<form class="form-horizontal" action="register.php" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email Adresi</label>
					<div class="col-sm-10">
						<input name="kullaniciEmail" type="text" class="form-control" id="inputEmail3" placeholder="Email Adresiniz" required>
					</div>
				</div>
				
				<div style="clear:both;"></div><br/>
				
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Şifre</label>
					<div class="col-sm-10">
						<input name="kullaniciSifre" type="password" class="form-control" id="inputPassword3" placeholder="Şifreniz" required>
					</div>
				</div>
				
				<div style="clear:both;"></div><br/>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="button button_grey" value="KAYDOL" />
					</div>
				</div>
			</form>
			
		</div>
    </div>
</div>

<!--==============================footer=================================-->
<?php include "footer.php" ?>