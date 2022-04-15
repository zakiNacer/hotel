<div id="index-chambres">

				<br>

				<div id="index-chambres-titre">
					<label>LES CHAMBRES</label>
				</div>
				<br>
				<div class="barre-array-blanche"></div>
				<div class="arrow-down-blanche"></div>
				<div class="barre-array-blanche"></div>
				<br>
				<br>
				<br>
				<br>
				<div id="index-label-description-chambres">
					<label>
						<?php
							echo $query=$db->query("SELECT * FROM text_chambres")->fetch()->texte;
						?>	
					</label>
				</div>
				<br>
				<br>
				<br>
				<br>
			</div>