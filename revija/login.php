<?php

$baglanti = mysqli_connect("localhost", "root", "", "webtek");

mysqli_query($baglanti,"SET NAMES 'utf8'");
mysqli_query($baglanti,"SET CHARACTER SET utf8_general_ci");

if(isset($_POST["kullaniciEmail"]) && isset($_POST["kullaniciSifre"])){
	$kullanici = mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE Email = '" . $_POST["kullaniciEmail"] . "' AND Sifre = '" . $_POST["kullaniciSifre"]."'");
	
	if(mysqli_num_rows($kullanici) == 0){
		echo "<script> hataMesaji(); </script>";
	} else if(mysqli_num_rows($kullanici) == 1){
		$kullanici = mysqli_fetch_array($kullanici);
		
		session_start();
		$_SESSION["kullaniciId"] = $kullanici["Id"];
		$_SESSION["admin"] = $kullanici["IsAdmin"];
		header("Location:index.php");
	}
}
?>

<!--==============================header=================================-->
<?php include "header.php" ?>


<!--==============================content================================-->

<br/><br/>

<div class="content">
    <div class="container">
        <div class="row">
			<form class="form-horizontal" action="login.php" method="POST">
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
				<!--<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Beni Hatırla
							</label>
						</div>
					</div>
				</div>-->
				
				<div style="clear:both;"></div><br/>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="button button_grey" value="GİRİŞ" />
					</div>
				</div>
			</form>
			
			<div style="clear:both;"></div><br/>
			
			<div id="alertDangerKullaniciGiris" class="alert alert-danger alert-danger-custom" style="display:none;">Email veya şifrenizi yanlış girdiniz.</div>
		</div>
    </div>
</div>

<script>

	function hataMesaji() {
		$("#alertDangerKullaniciGiris").show();
	}
	
</script>

<!--==============================footer=================================-->
<?php include "footer.php" ?>