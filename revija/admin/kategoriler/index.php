<?php include "../header.php"; ?>

<h4 style="text-decoration:underline;">KATEGORİLER</h4>
<br/>

<a href="./ekle.php" style="text-decoration: none;">
	<button type="button" class="btn btn-success">Kategori Ekle</button>
</a>

<br/><br/>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Kategori Adı</th>
        <th>Kategori CSS Class</th>
		<th>İşlemler</th>
      </tr>
    </thead>
    <tbody>
	  <?php
		$kategoriler = mysqli_query($baglanti,"SELECT * FROM kategoriler ORDER BY Id DESC");
		
		while($kategori = mysqli_fetch_array($kategoriler)){
	  ?>
	
      <tr>
        <td><?php echo $kategori["Id"]; ?></td>
        <td><?php echo $kategori["Ad"]; ?></td>
        <td><?php echo $kategori["CSSClass"]; ?></td>
		<td>
			<a href="./duzenle.php?id=<?php echo $kategori["Id"]; ?>"><span class="glyphicon glyphicon-edit"></span></a>
			<span>  </span>
			<a href="./sil.php?id=<?php echo $kategori["Id"]; ?>"><span class="glyphicon glyphicon-remove"></span></a>
		</td>
      </tr>
	  
	  <?php } ?>
	  
      
    </tbody>
</table>


<?php include "../footer.php"; ?>