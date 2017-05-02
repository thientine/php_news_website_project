<?php include "../header.php"; ?>

<?php
	if(isset($_GET["kategoriAd"]) && isset($_GET["kategoriClass"])){
		
		$kategoriAd = $_GET["kategoriAd"];
		$kategoriClass = $_GET["kategoriClass"];
		mysqli_query($baglanti,"INSERT INTO kategoriler(Id, Ad, CSSClass) VALUES (NULL, '$kategoriAd', '$kategoriClass')");
		header("Location:./");
	}
?>

<h4 style="text-decoration:underline;">KATEGORİ EKLE</h4>
<br/>

<form class="form-horizontal" method="get" action="ekle.php">
  <div class="form-group">
	<label class="control-label col-sm-2" for="ad">Kategori Adı:</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" id="ad" placeholder="Kategori Adını Giriniz..." name="kategoriAd" required>
	</div>
  </div>
  <div class="form-group">
	<label class="control-label col-sm-2" for="class">CSS Class:</label>
	<div class="col-sm-10"> 
	  <input type="text" class="form-control" id="class" placeholder="Kategori Class Adını Giriniz..." name="kategoriClass">
	</div>
  </div>
  <div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-10">
	  <button type="submit" class="btn btn-default">EKLE</button>
	</div>
  </div>
</form>

<?php include "../footer.php"; ?>