<?php
include('connect.php');
$img=$_FILES['fichier']['tmp_name'];
$alt=$_FILES['fichier']['name'];
$dest="Fichiers/".$alt;
move_uploaded_file($img,'../../'.$dest);
$tab=$db->query("SELECT MAX(ordre) as max_ordre FROM pic_photo");
foreach($tab as $tab){
$max_ordre=$tab->max_ordre;}
$ordre=$max_ordre+1;
$db->query("INSERT INTO pic_photo (src,alt,ordre) VALUES ('$dest','$alt','$ordre')");
header("Location: ../index.php?galerie");
?>