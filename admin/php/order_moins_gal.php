<?php
include('connect.php');
$order=$_GET['order'];
$db->query("UPDATE pic_photo as photo1 JOIN pic_photo as photo2
ON photo1.ordre='$order' AND photo2.ordre='$order'-1
SET photo1.ordre=photo2.ordre, photo2.ordre=photo1.ordre");
header("Location: ../index.php?galerie");