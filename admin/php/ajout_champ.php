<?php include('connect.php');
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$option=$_POST['option'];
$prix_opt=$_POST['prix_opt'];
if(empty($nom)){ ?>
<script>
     alert("Il n'y a pas de nom!!!");
     window.location = "../?tarifs";
</script>
<?php }elseif(empty($prix) AND empty($prix_opt)){ ?>
    <script>
         alert("Il n'y a pas de prix!!!");
         window.location = "../?tarifs";
    </script>
<?php
}else{
     $db->query("INSERT INTO main_tarif (nom_main,prix) VALUES ('$nom','$prix')");
     $last_id=$db->lastInsertId();
     $db->query("INSERT INTO option_tarif (id_from_main,nom_option,prix_opt) VALUES ('$last_id','$option','$prix_opt')");
     header("Location: ../index.php?tarifs");
 }

