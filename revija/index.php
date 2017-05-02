<!--==============================header=================================-->
<?php include "header.php" ?>
	
<!--==============================SLIDER================================-->
<div class="content">
	<div class="container">
		<!-- ========LAYER SLIDER======== -->
		<div id="layerslider" class="section_8" style="width: 100%; height: 500px;" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">

			<?php
				$haberler = mysqli_query($baglanti, "SELECT *, haberler.Id AS haberId
													 FROM haberler, kategoriler
													 WHERE IsSlider = 1
													 AND kategoriler.Id = haberler.KategoriId
													 ORDER BY haberler.Tarih DESC
													 LIMIT 10");
				
				while($haber = mysqli_fetch_array($haberler)){
			?>
			
			<div class="ls-layer" style="slidedirection: top; slidedelay: 8000; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; easingout: easeInOutQuint; delayin: 0; delayout: 0; transition3d: all;"> <img src="images/<?php echo $haber["FotografAd"]; ?>" class="ls-bg" alt="Slide background">
				<div class="ls-s4" style="position: absolute; top: 50%; right: 0; slidedirection : bottom; slideoutdirection : top;  durationin : 1500; durationout : 1500; easingin: easeInOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 100; showuntil : 0;">
					<div class="caption_inner layer_slide_text">
						<div class="clearfix">
							<a href="./kategoriler.php?kategoriId=<?php echo $haber["KategoriId"]; ?>" role="button" class="button banner_button <?php echo $haber["CSSClass"]; ?>"><?php echo $haber["Ad"]; ?></a>
							<div class="event_date"><?php echo  date( 'd/m/Y H.i', strtotime($haber["Tarih"])); ?></div>
						</div>
						<a href="./post.php?haberId=<?php echo $haber["haberId"]; ?>"><h2><?php echo $haber["Baslik"]; ?></h2></a>
					</div>
				</div>
			</div>
			
			<?php } ?>
			
		</div>
	</div>
	<!--========LAYER SLIDER========--> 
</div>

<!--==============================HABERLER=================================-->
<div class="container">
	<div class="row">
	  <main id="main" class="col-md-12 col-sm-12">
		
		<?php

			$kategoriler = mysqli_query($baglanti, "SELECT * FROM kategoriler");
			
			while($kategori = mysqli_fetch_array($kategoriler)){
		?>
		
		<!-- haber kategorisi -->
		<div class="section">
			<div class="tabs variation_2 <?php echo $kategori["CSSClass"]; ?>-title">
				<!--tabs navigation-->
				<div class="clearfix">
					<h3 class="section_title"><?php echo $kategori["Ad"]; ?></h3>
					<div class="clearfix tabs_conrainer">
						<ul class="tabs_nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class=""><a href="./kategoriler.php?kategoriId=<?php echo $kategori["Id"]; ?>" class="ui-tabs-anchor">TÜMÜ</a></li>
						</ul>
					</div>
				</div>
				<!-- kategorinin haberleri 2 adet -->
				<div class="tabs_content post_var_inline">
					<div id="tab-1">
						<div class="row">
							<ul>
								<?php

									$haberler = mysqli_query($baglanti, "SELECT *
																		 FROM haberler
																		 WHERE KategoriId = ".$kategori["Id"]."
																		 ORDER BY Tarih DESC
																		 LIMIT 2");
									
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

		<?php } ?>
		
	  </main>
	</div>
</div>

<!--==============================footer=================================-->
<?php include "footer.php" ?>