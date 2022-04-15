<?php
include('connect.php');
$id=$_GET['id'];
$option=$_POST['option'];
$prix=$_POST['prix'];
$db->query("INSERT INTO option_tarif (id_from_main,nom_option,prix_opt) VALUES ('$id','$option','$prix')");
header("Location: ../index.php?tarifs");
?>