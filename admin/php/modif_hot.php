<?php
include('connect.php');
$modif=$_POST['hotel'];
$query=$db->prepare("UPDATE text_hotel SET texte=?");
$query->execute([$modif]);
header("Location: ../index.php?hotel");
?>