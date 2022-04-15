<?php include('connect.php');
$id=$_GET['id'];
$db->query("DELETE FROM main_tarif WHERE mtarif_id='$id'");
$db->query("DELETE FROM option_tarif WHERE id_from_main='$id'");
header("Location: ../index.php?tarifs");
