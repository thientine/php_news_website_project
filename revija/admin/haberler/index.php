<?php include "../header.php"; ?>

<h4 style="text-decoration:underline;">HABERLER</h4>
<br/>

<a href="./ekle.php" style="text-decoration: none;">
	<button type="button" class="btn btn-success">Haber Ekle</button>
</a>

<br/>
<br/>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
		<th>Fotoğraf</th>
        <th>Başlık</th>
		<th>İçerik</th>
		<th>Kategori</th>	
		<th>Slider</th>		
		<th>Flaş</th>
		<th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
	  <?php
	  	
		$haberler = mysqli_query($baglanti,"SELECT *, haberler.Id AS haberId FROM haberler, kategoriler WHERE haberler.kategoriId = kategoriler.Id ORDER BY haberler.Id DESC");
		
		while($haber = mysqli_fetch_array($haberler)){
	  ?>
	
      <tr>
        <td><?php echo $haber["haberId"]; ?></td>
        <td><?php echo "<img height='70' width='150' src=\"/revija/images/".$haber["FotografAd"]."\""; ?></td>
		<td><?php echo strlen($haber["Baslik"]) > 30 ? substr($haber["Baslik"], 0, 30) . "..." : $haber["Baslik"];?></td>
		<td><?php echo strlen($haber["Icerik"]) > 50 ? substr($haber["Icerik"], 0, 50) . "..." : $haber["Icerik"];?></td>
		<td><?php echo $haber["Ad"]; ?></td>
		<td><span class="glyphicon glyphicon-<?php echo $haber["IsSlider"] ? "ok" : "remove"; ?>"></span></td>
		<td><span class="glyphicon glyphicon-<?php echo $haber["IsFlas"] ? "ok" : "remove"; ?>"></span></td>
		<td>
			<a href="./duzenle.php?id=<?php echo $haber["haberId"]; ?>"><span class="glyphicon glyphicon-edit"></span></a>
			<span>  </span>
			<a href="./sil.php?id=<?php echo $haber["haberId"]; ?>"><span class="glyphicon glyphicon-remove"></span></a>
		</td>
      </tr>
	  
	  <?php } ?>
	  
      
    </tbody>
</table>


<?php include "../footer.php"; ?>