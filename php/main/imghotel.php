<?php
	$requete="SELECT * FROM img_hotel";
	$query=$db->query($requete);
	$row=$query->fetch()
?>

			<div id="index-image-hotel">
				<img src="<?php echo $row->src; ?>" alt="<?php echo $row->alt; ?>">
			</div>