<div id="index-hotel">

				<br>
				
				<div id="index-hotel-titre">
					<h2><label>HÔTEL</label></h2>
				</div>
				<br>
				<div class="barre-array-rouge"></div>
				<div class="arrow-down-rouge"></div>
				<div class="barre-array-rouge"></div>

				<br>
				<br>

				<div id="index-label-description-hotel">
					<h3>
						<label>
					<?php
                		echo $query=$db->query("SELECT * FROM text_hotel")->fetch()->texte;
					?>
						</label>
					</h3>
				</div>

				<br>

				<div id="index-hotel-les-plus">
					<label>LES +</label>
				</div>

				<br>
				<br>

				<div id="index-hotel-picto">

				<?php
                		$query=$db->query("SELECT * FROM pic_hotel LIMIT 5")->fetchAll();
						foreach ($query as $value):
							?>
							<div class="hotel-picto-img">
								<img src="<?php echo $value->picto_lien; ?>" alt="<?php echo $value->picto_alt; ?>">
							</div>
							<?php
						endforeach;
					?>

				</div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<div id="index-hotel-adherent">
					<div id="hotel-adherent-titre">
						<label>L'HÔTEL EST ADHÉRENT</label>
					</div>
					<?php
                		$query=$db->query("SELECT * FROM pic_hotel LIMIT 5,4")->fetchAll();
						foreach ($query as $value):
							?>
						<div class="hotel-adherent-img">
							<img class="hotel-picto" src="<?php echo $value->picto_lien; ?>" alt="<?php echo $value->picto_alt; ?>">
						</div>
							<?php
						endforeach;
					?>
					

				</div>

				<br>
				<br>
				<br>
				<br>

				

			</div>