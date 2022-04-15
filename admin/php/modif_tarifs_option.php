<?php
include('connect.php');
$option=$_POST['option'];
$prix=$_POST['prix'];
$id=$_GET['id'];
$query=$db->query("UPDATE option_tarif SET nom_option='$option', prix_opt='$prix' WHERE id=$id");
header("Location: ../index.php?tarifs");
?>