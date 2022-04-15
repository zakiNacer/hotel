<?php include "php/connect.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>L'HÔTEL DU RELAIS - 79 THOUARS - CELINE ET THIERRY VOUS ACCUEILLE DANS UNE AMBIANCE CHALEUREUSE ET CONVIVIALE
		!</title>

	<meta content="width=device-width, initial-scale=1.0, user-scalable=yes" name="viewport">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description"
		content="L'hôtel du Relais Céline et Thierry vous accueillent à l'hôtel du relais. Dans une ambiance chaleureuse et conviviale, pour votre plus grand plaisir. Pour vos séjours détentes, touristiques ou vos déplacements professionnels, venez proiter du confort et du calme de nos chambres toutes personnalisées.">
	<meta name="keywords" content="hotel, hôtel, thouars, hotel du relais, hôtel du relais, 79100">
	<meta property="og:title" content="L'hôtel du Relais">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.hotel-du-relais-79.com/">
	<meta property="og:image" content="pics/Galerie/19.jpg">
	<meta property="og:site_name" content="L'hôtel du Relais">



	<script type="text/javascript" src="js/jquery.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="https://www.contact-hotel.com/javascript/widget_ch_reservation.js"></script>
	<link href="https://www.contact-hotel.com/css/widget_ch_reservation.css" type="text/css" rel="stylesheet" />

	<link href="css/global.css" rel="stylesheet" type="text/css">
	<link href="js/zoombox/zoombox.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/global.js"></script>
	<script type="text/javascript" src="js/zoombox/zoombox.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src='js/datetimepickerfr.js'></script>



	<script>
		$(function () {
			$('a.zoombox').zoombox();
		});

		$(document).ready(function () {

			$.datepicker.setDefaults($.datepicker.regional["fr"]);

			if (window.location.hash.substr(1) != "") {
				var Ancre = window.location.hash.substr(0);
				$('html, body').animate({
					scrollTop: ($(Ancre).offset().top)
				}, 'slow');
			}
		});
	</script>

</head>

<body>

	<?php 
	include ("php/header.php"); 
	if(isset($_GET["tourisme"])){
	include ("php/tourisme.php");
    }elseif(isset($_GET["legales"])){
	include("php/legales.php");
	}else{
	include ("php/main.php");
	}
	include ("php/footer.php");
	?>
	</div>
</body>

</html>

<script>
	$('.header-tablecell').click(function () {
		var href = $(this).attr("href");
		Ancre = href.substring(href.indexOf("#"));
		$('html, body').animate({
			scrollTop: $(Ancre).offset().top
		}, 'slow');
	});
</script>