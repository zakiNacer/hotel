<div id="index-photos">

				<br>

				<div id="index-photos-titre">
					<label>GALERIE PHOTOS</label>
				</div>
				<br>
				<div class="barre-array-blanche"></div>
				<div class="arrow-down-blanche"></div>
				<div class="barre-array-blanche"></div>
				<br>
				<br>
				<br>
				<br>

				<div id="index-photos-galerie">
					<div class="tablerow">
						<?php
						$query=$db->query("SELECT * FROM pic_photo ORDER BY ordre")->fetchAll();
						foreach ($query as $value):
						?>
						<a href="<?php echo $value->src; ?>" class="img-minia zoombox zgallery1"><img src="<?php echo $value->src; ?>" alt="<?php echo $value->alt; ?>"></a>
						<?php endforeach; ?>
					</div>
				</div>

				<br>
				<br>
				<br>
				<br>

			</div>