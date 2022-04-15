<?php
include('connect.php');
$modif=$_POST['chambres'];
$query=$db->prepare("UPDATE text_chambres SET texte=?");
$query->execute([$modif]);
header("Location: ../index.php?chambres");
?>