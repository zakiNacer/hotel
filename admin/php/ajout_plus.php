<?php
include('connect.php');
$img=$_FILES['fichier']['tmp_name'];
$alt=$_FILES['fichier']['name'];
$dest="pics/Hotel/".$alt;

move_uploaded_file($img,'../../'.$dest);
$db->query("INSERT INTO pic_hotel (picto_lien,picto_alt) VALUES ('$dest','$alt')");
header("Location: ../index.php?les_plus");
?>