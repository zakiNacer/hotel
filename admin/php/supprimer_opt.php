<?php include('connect.php');
$id=$_GET['id'];
$db->query("DELETE FROM option_tarif WHERE id='$id'");
header("Location: ../index.php?tarifs");
