<?php
include('connect.php');
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$id=$_GET['id'];
$query=$db->query("UPDATE main_tarif SET nom_main='$nom', prix='$prix' WHERE mtarif_id=$id");
header("Location: ../index.php?tarifs");
?>