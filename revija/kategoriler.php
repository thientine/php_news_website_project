<!--==============================header=================================-->
<?php include "header.php" ?>

<!--==============================HABERLER=================================-->
<div class="container">
	<div class="row">
	  <main id="main" class="col-md-12 col-sm-12">
		
		<?php
			$kategoriId = @$_GET["kategoriId"];
			$kategori = mysqli_fetch_array(mysqli_query($baglanti, "SELECT * FROM kategoriler WHERE Id = " . $kategoriId));
		?>
		
		<!-- haber kategorisi -->
		<div class="section">
			<div class="tabs variation_2 <?php echo $kategori["CSSClass"]; ?>-title">
				<!--tabs navigation-->
				<div class="clearfix">
					<h3 class="section_title"><?php echo $kategori["Ad"]; ?></h3>
				</div>
				<!-- kategorinin haberleri -->
				<div class="tabs_content post_var_inline">
					<div id="tab-1">
						<div class="row">
							<ul>
								<?php

									$haberler = mysqli_query($baglanti, "SELECT *
																		 FROM haberler
																		 WHERE KategoriId = ".$kategori["Id"]."
																		 ORDER BY Tarih DESC");
									
									while($haber = mysqli_fetch_array($haberler)){
								?>
							  
								<li class="clearfix col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="scale_image_container">
										<a href="./post.php?haberId=<?php echo $haber["Id"]; ?>"><img src="images/<?php echo $haber["FotografAd"]; ?>" width="165" height="110" class="scale_image"></a>
									</div>
									<div class="post_text">
										<?php if($haber["IsFlas"]) { ?>
											<div class="post_theme f_left">FLAŞ</div>
										<?php } ?>
										
										<a href="./post.php?haberId=<?php echo $haber["Id"]; ?>">
											<h4><?php echo $haber["Baslik"]; ?></h4>
										</a>
										
										<div class="event_date"><?php echo  date( 'd/m/Y H.i', strtotime($haber["Tarih"])); ?></div>
									</div>
								</li>
								  
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	  </main>
	</div>
</div>

<!--==============================footer=================================-->
<?php include "footer.php" ?>