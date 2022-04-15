<?php
if(isset($_GET['hotel'])){include('php/hotel.php');}
elseif(isset($_GET['header'])){ include('php/header.php');}
elseif(isset($_GET['form_champ'])){ include('php/form_champ.php');}
elseif(isset($_GET['form_option'])){ include('php/form_option.php');}
elseif(isset($_GET['tarifs'])){ include('php/tarifs.php');}
elseif(isset($_GET['galerie'])){ include('php/galerie.php');}
elseif(isset($_GET['les_plus'])){ include('php/les_plus.php');}
elseif(isset($_GET['chambres'])){ include('php/chambres.php');}
elseif(isset($_GET['tables'])){ include('php/tables.php');}
elseif(isset($_GET['404'])){ include('php/404.php');}
elseif(isset($_GET['buttons'])){ include('php/buttons.php');}
elseif(isset($_GET['cards'])){ include('php/cards.php');}
elseif(isset($_GET['login'])){ include('php/login.php');}
elseif(isset($_GET['register'])){ include('php/register.php');}
elseif(isset($_GET['blank'])){ include('php/blank.php');}
elseif(isset($_GET['charts'])){ include('php/charts.php');}
elseif(isset($_GET['utilities-animation'])){ include('php/utilities-animation.php');}
elseif(isset($_GET['utilities-border'])){ include('php/utilities-border.php');}
elseif(isset($_GET['utilities-color'])){ include('php/utilities-color.php');}
elseif(isset($_GET['utilities-other'])){ include('php/utilities-other.php');}
elseif(isset($_GET['forgot_password'])){ include('php/forgot-password.php');}
else{include('php/accueil.php');}
?>