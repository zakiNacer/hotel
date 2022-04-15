<div id="index-tarifs">

				<br>

				<div id="index-tarifs-titre">
					<label>TARIFS</label>
				</div>
				<br>
				<div class="barre-array-rouge"></div>
				<div class="arrow-down-rouge"></div>
				<div class="barre-array-rouge"></div>

				<br>
				<br>

				<div id="index-tarifs-table">

					
					<div class="tablecell-tarifs">

						<div class="table">
							<?php
								$leftlimit=6;
								$tab=$db->query("SELECT * FROM main_tarif LIMIT $leftlimit")->fetchAll();
								foreach ($tab as $value):
									$nom=$value->nom_main;
									$id=$value->mtarif_id
							?>
							<div class="tablerow">
								<div class="index-tarifs-sous-titre"><label><?php echo $nom; ?></label></div>
							
							<?php
								if($value->prix=="" OR is_null($value->prix)){
									?> </div> <?php
									$tab2=$db->query("SELECT * FROM option_tarif WHERE id_from_main = $id")->fetchAll();
									foreach ($tab2 as $value2):
									?> 
								<div class="tablerow">
								<div class="tablecell-gauche">
									<label class="tarifs-details"><?php echo $value2->nom_option; ?></label>
								</div>
								<div class="tablecell-droite">
									<label class="tarifs-details"><?php echo $value2->prix_opt; ?></label>
								</div>
								</div>
								
								<?php endforeach;
								}else{
									?>
									<div class="tablecell-droite">
									<label class="tarifs-details"><?php echo $value->prix; ?></label>
									</div>
									</div>
									<?php
								}
							?>
							<br>
							<br>
							<?php endforeach ?>
							</div>
					</div>

					<div class="index-space"></div>

					<div class="tablecell-tarifs">

						<div class="table">
							<?php
								$tab=$db->query("SELECT * FROM main_tarif LIMIT $leftlimit,$leftlimit")->fetchAll();
								foreach ($tab as $value):
									$nom=$value->nom_main;
									$id=$value->mtarif_id
									?>
							<div class="tablerow">
								<div class="index-tarifs-sous-titre-droit"><label><?php echo $nom; ?></label></div>
							
							<?php
								if($value->prix=="" OR is_null($value->prix)){
									?> </div> <?php
									$tab2=$db->query("SELECT * FROM option_tarif WHERE id_from_main = $id")->fetchAll();
									foreach ($tab2 as $value2):
									?> 
								<div class="tablerow">
								<div class="tablecell-gauche">
									<label class="tarifs-details"><?php echo $value2->nom_option; ?></label>
								</div>
								<div class="tablecell-droite">
									<label class="tarifs-details"><?php echo $value2->prix_opt; ?></label>
								</div>
								</div>
								
								<?php endforeach;
								}else{
									?>
									<div class="tablecell-droite">
									<label class="tarifs-details"><?php echo $value->prix; ?></label>
									</div>
									</div>
									<?php
								}
							?>
							<br>
							<br>
							<br>
							<?php endforeach ?>
						</div>

					</div>
				</div>
			</div>