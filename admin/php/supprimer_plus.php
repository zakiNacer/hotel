<?php include('connect.php');
$id=$_GET['id'];
$db->query("DELETE FROM pic_hotel WHERE photel_id=$id");
header("Location: ../index.php?les_plus");

