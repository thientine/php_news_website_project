<?php include "../header.php"; ?>

<h4 style="text-decoration:underline;">YORUMLAR</h4>
<br/>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
		<th>Ad</th>
        <th>İçerik</th>
		<th>Onay</th>
		<th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
	  <?php
		$yorumlar = mysqli_query($baglanti,"SELECT * FROM yorumlar ORDER BY Onay, Id DESC");
		
		while($yorum = mysqli_fetch_array($yorumlar)){
	  ?>
	
      <tr>
        <td><?php echo $yorum["Id"]; ?></td>
        <td><?php echo $yorum["Ad"]; ?></td>
		<td><?php echo strlen($yorum["Icerik"]) > 50 ? substr($yorum["Icerik"], 0, 50) . "..." : $yorum["Icerik"];?></td>
		<td><?php echo $yorum["Onay"] ? "Onaylı" : "Onay Yok"; ?></td>
		<td>
			<?php if(!$yorum["Onay"]){ ?>
				<a href="./onay.php?id=<?php echo $yorum["Id"]; ?>"><span class="glyphicon glyphicon-ok"></span></a>
			<?php } ?>
			<span>  </span>
			<a href="./sil.php?id=<?php echo $yorum["Id"]; ?>"><span class="glyphicon glyphicon-remove"></span></a>
		</td>
      </tr>
	  
	  <?php } ?>
	  
      
    </tbody>
</table>


<?php include "../footer.php"; ?>