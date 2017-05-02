<?php include "../header.php"; ?>

<?php
	if( isset($_POST["submit"]) ){
		
		$haberId = $_POST["haberId"];
		$haberKategoriId = $_POST["haberKategoriId"];
		$haberBaslik = $_POST["haberBaslik"];
		$haberIcerik = $_POST["haberIcerik"];
		$haberIsSlider = isset($_POST["haberIsSlider"]) ? 1 : 0;
		$haberIsFlas = isset($_POST["haberIsFlas"]) ? 1 : 0;
		$haberFotografAd = "";
		
		if($_FILES["haberFotograf"]["name"] != ""){
			
			// fotoğraf yükleme kısmı
			$target_dir = "../../images/";
			$target_file = $target_dir . basename($_FILES["haberFotograf"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["haberFotograf"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			
			// Check if file already exists
			/*if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}*/
			
			// Check file size
			/*if ($_FILES["haberFotograf"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}*/
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				echo "Sorry, only JPG, JPEG, PNG files are allowed.";
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["haberFotograf"]["tmp_name"], $target_file)) {
					//echo "The file ". basename( $_FILES["haberFotograf"]["name"]). " has been uploaded.";
					$haberFotografAd = $_FILES["haberFotograf"]["name"];
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			
		}
		
		mysqli_query($baglanti,"UPDATE haberler 
		SET Baslik = '$haberBaslik'," . ($haberFotografAd != "" ? " FotografAd = '$haberFotografAd', " : "") . "Icerik = '$haberIcerik', IsFlas = $haberIsFlas, IsSlider = $haberIsSlider, KategoriId = $haberKategoriId
		WHERE Id = $haberId");
		
		header("Location:./");
		
	} else if(isset($_GET["id"])){
		
		$haber = mysqli_fetch_array(mysqli_query($baglanti,"SELECT *, haberler.Id AS haberId FROM haberler, kategoriler WHERE haberler.Id = " . $_GET["id"] . " AND haberler.kategoriId = kategoriler.Id"));
		if(!isset($haber)) header("Location: ./");
		
	} else {
		
		header("Location:./");
	}
	
	
?>

<h4 style="text-decoration:underline;">HABER DÜZENLE</h4>
<br/>

<form class="form-horizontal" method="post" action="duzenle.php" enctype="multipart/form-data">
  <div class="form-group">
	<label class="control-label col-sm-2" for="ad">Haber Kategorisi:</label>
	<div class="col-sm-10">
	  <select class="form-control" name="haberKategoriId">
	    <?php
			$kategoriler = mysqli_query($baglanti,"SELECT * FROM kategoriler");
			while($kategori = mysqli_fetch_array($kategoriler)){
		?>
		
        <option <?php echo ($kategori["Id"] == $haber["KategoriId"]) ? "selected" : ""; ?> value="<?php echo $kategori["Id"]; ?>"><?php echo $kategori["Ad"]; ?></option>
		
		<?php } ?>
      </select>
	</div>
  </div>
  <div class="form-group">
	<label class="control-label col-sm-2" for="ad">Haber Başlığı:</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" id="ad" placeholder="Haber Başlığını Giriniz..." value="<?php echo $haber["Baslik"]; ?>" name="haberBaslik" required>
	</div>
  </div>
  <div class="form-group">
	<label class="control-label col-sm-2" for="ad">Haber Fotoğrafı:</label>
	<div class="col-sm-10">
	  <input type="file" name="haberFotograf">
	</div>
  </div>
  <div class="form-group">
	<label class="control-label col-sm-2" for="ad">Haber İçeriği:</label>
	<div class="col-sm-10">
		<textarea class="form-control" rows="10" name="haberIcerik" required><?php echo $haber["Icerik"]; ?></textarea>
	</div>
  </div>
  <div class="form-group">
	<label class="control-label col-sm-2" for="class"></label>
	<div class="col-sm-10"> 
		<div class="checkbox">
		  <label><input type="checkbox" name="haberIsSlider" <?php echo $haber["IsSlider"] ? "checked" : ""; ?>>Slider Olarak Göster</label>
		  <br/><br/>
		  <label><input type="checkbox" name="haberIsFlas" <?php echo $haber["IsFlas"] ? "checked" : ""; ?>>Flaş Haber</label>
		  <br/><br/>
		</div>
	</div>
  </div>
  
  <input type="hidden" name="haberId" value="<?php echo $haber["haberId"]; ?>" />
  
  <div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-10">
	  <button type="submit" class="btn btn-default" name="submit">DÜZENLE</button>
	</div>
  </div>
</form>

<?php include "../footer.php"; ?>