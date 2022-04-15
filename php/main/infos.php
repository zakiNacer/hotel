<div id="index-infos">

	<br>

	<div id="index-infos-titre">
		<label>INFOS PRATIQUES</label>
	</div>
	<br>
	<div class="barre-array-blanche"></div>
	<div class="arrow-down-blanche"></div>
	<div class="barre-array-blanche"></div>

	<br>
	<br>

	<div class="infos-table">
		<div class="infos-tablecell">

			<div class="infos-tablerow">
				<div class="infos-tablecell-picto"><img src="pics/infos/maison.png"></div>
				<div class="infos-tablecell-space"></div>
				<div class="infos-tablecell-picto"><label class="infos-table-titre">COORDONNÉES</label></div>
			</div>

			<br>

			<div class="infos-tablerow">
				<label class="infos-details">
					2, RUE DE LA CROIX CAMUS<br>
					LOUZY<br>
					79100 THOUARS
				</label>
			</div>

			<br>

			<div class="infos-tablerow">
				<label class="infos-details">
					TÉL : 05 49 66 29 45<br>
					FAX : 05 49 66 29 33
				</label>
			</div>

			<br>

			<div class="infos-tablerow">

				<div class="infos-tablecell-picto"><img src="pics/infos/fleche.png"></div>
				<div class="infos-tablecell-space"></div>
				<div class="infos-tablecell-picto"><label class="infos-table-titre">LAT. : 47.002623<br>LONG. :
						-0.2057165</label></div>
			</div>

			<br>

			<div class="infos-tablerow">
				<a href="https://www.google.fr/maps/place/H%C3%B4tel+Le+Relais/@47.002645,-0.2076257,17z/data=!3m1!4b1!4m7!3m6!1s0x480790f39114fc99:0x43a774f72cfb665b!5m1!1s2018-08-07!8m2!3d47.002645!4d-0.205437"
					target="_blank">VOIR SUR LA CARTE</a>
			</div>

		</div>

		<div class="index-space"></div>

		<div class="infos-tablecell-droite">

			<div class="infos-tablerow">
				<div class="infos-tablecell-picto"><img src="pics/infos/horaires.png"></div>
				<div class="infos-tablecell-space"></div>
				<div class="infos-tablecell-picto"><label class="infos-table-titre">HORAIRES</label></div>
			</div>

			<br>

			<div class="infos-tablerow">
				<label class="infos-details">
					<?php
						$requete="SELECT * FROM horaires_infos";
						echo $query=$db->query($requete)->fetch()->texte;
					?>
				</label>
			</div>

			<div class="infos-tablerow">
				<img id="infos-contacthotel" src="pics/logo_une_couleur_web.png">
			</div>

		</div>

	</div>

	<br>
	<br>
</div>