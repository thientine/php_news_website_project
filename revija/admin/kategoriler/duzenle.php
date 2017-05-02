<?php include "../header.php"; ?>

<?php
	if(isset($_GET["kategoriAd"]) && isset($_GET["kategoriClass"]) && isset($_GET["id"])){
		
		$kategoriAd = $_GET["kategoriAd"];
		$kategoriClass = $_GET["kategoriClass"];
		$kategoriId = $_GET["id"];
		mysqli_query($baglanti,"UPDATE kategoriler SET Ad='$kategoriAd',CSSClass='$kategoriClass' WHERE Id = $kategoriId");
		header("Location:./");
		
	} else if (isset($_GET["id"])) {
		$kategori = mysqli_fetch_array(mysqli_query($baglanti,"SELECT * FROM kategoriler WHERE Id = " . $_GET["id"]));
		
	} else {
		header("Location:./");
	}
?>

<h4 style="text-decoration:underline;">KATEGORİ DÜZENLE</h4>
<br/>


<form class="form-horizontal" method="get" action="duzenle.php">
  <div class="form-group">
	<label class="control-label col-sm-2" for="ad">Yeni Kategori Adı:</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" placeholder="Kategori Adını Giriniz..." name="kategoriAd" value="<?php echo $kategori["Ad"]; ?>" required>
	</div>
  </div>
  <div class="form-group">
	<label class="control-label col-sm-2" for="class">Yeni CSS Class:</label>
	<div class="col-sm-10"> 
	  <input type="text" class="form-control" placeholder="Kategori Class Adını Giriniz..." value="<?php echo $kategori["CSSClass"]; ?>" name="kategoriClass" required>
	</div>
  </div>
  <div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-10">
	  <button type="submit" class="btn btn-default">DÜZENLE</button>
	</div>
  </div>
  <input type="hidden" name="id" value="<?php echo $kategori["Id"]; ?>" />
</form>

<?php include "../footer.php"; ?>