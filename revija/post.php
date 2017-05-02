<!--==============================header=================================-->
<?php include "header.php" ?>


<!--==============================content================================-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="section">
			
			<?php
				$haberId = @$_GET["haberId"];
				$haber = mysqli_fetch_array(mysqli_query($baglanti, "SELECT * FROM haberler WHERE Id = " . $haberId));
			?>

            <h2 class="section_title section_title_medium_var2"><?php echo $haber["Baslik"]; ?></h2>
            <div class="text_post_block">
                <div class="scale_image_container">
                  <img width="1140" src="images/<?php echo $haber["FotografAd"]; ?>" class="scale_image" style="max-height:500px">
                </div>
				
				<div>
					<?php echo $haber["Icerik"]; ?>
				</div>
				
				<!-- YORUMLAR -->	
				<div class="section">
					<h3 class="section_title">Yorumlar</h3>
					<ul class="comments">
						<?php
							$yorumlar = mysqli_query($baglanti, "SELECT * FROM yorumlar WHERE Onay = 1 AND HaberId = " . $haberId);
							while($yorum = mysqli_fetch_array($yorumlar)){
						?>
					
						<li>
							<div class="comment clearfix">
								<div>
									<div>
										<div class="clearfix">
											<a href="#"><h5 class="f_left"><?php echo $yorum["Ad"]; ?></h5></a>
										</div>
										<p><?php echo $yorum["Icerik"]; ?></p>
									</div>
								</div>
							</div>
						</li>
						
						<?php } ?>
					</ul>
				</div>

					<!-- YORUM YAPMA KISMI -->
				  <div class="section">
					<h3 class="section_title">Yorum Bırakın</h3>
					<form class="contact_form" action="yorumyap.php" method="GET">
					  <ul>
						<li>
						  <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							  <label>Adınız<span class="required"></span></label>
							  <input type="text" name="yorumAd" required>
							</div>
						  </div>
						</li>
						<li>
						  <label>Yorumunuz</label>
						  <textarea name="yorumIcerik" required></textarea>
						</li>
						<li>
						  <input type="submit" class="button button_grey" value="GÖNDER"/>
						  <input type="hidden" name="haberId" value="<?php echo @$_GET["haberId"]; ?>"
						</li>
					  </ul>
					</form>
				  </div>
            </div>        
          </div>
        </div>
      </div>
    </div>
</div>

<!--==============================footer=================================-->
<?php include "footer.php" ?>