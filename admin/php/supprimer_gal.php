<?php include('connect.php');
$id=$_GET['id'];
$db->query("DELETE FROM pic_photo WHERE pphoto_id=$id");
header("Location: ../index.php?galerie");

