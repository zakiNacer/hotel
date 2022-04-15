<?php include('connect.php'); ?>
<style>
.fleche{
    font-size:200%;
}
.sup, .sup:hover{
    color:red;
}
td{
    text-align:center;
    width: 100px;
    border:1px solid black;
    padding:10px;
}
</style>

<h1>Galerie</h1><br>
<form method='post' action='php/ajout_gal.php' enctype='multipart/form-data'>
    <input type='file' name='fichier'>
    <input type='submit' value='ajouter'>
</form>
<br>
<table>
    <tr>
        <td><h2>Image</h2></td>
        <td><h2>Ordre</h2></td>
        <td><h2>Supprimmer</h2></td>
    </tr>
    <?php
$tab=$db->query("SELECT (MAX(ordre)) as max_order, (MIN(ordre)) as min_order FROM pic_photo")->fetchAll();
foreach($tab as $tab){ 
    $max_ordre=$tab->max_order;
    $min_ordre=$tab->min_order;}
    $tab=$db->query("SELECT * FROM pic_photo ORDER BY ordre")->fetchAll();
foreach($tab as $tab){ 
    $order=$tab->ordre;
    $id=$tab->pphoto_id;
    echo"<tr><td><img src='../".$tab->src."' alt='".$tab->alt."' style='width:200px;height:140px;' </td>
    <td>";
    if($order>$min_ordre){ echo "<a href='php/order_moins_gal.php?order=".$order."' class='fleche'>↑</a>";}
    echo "<p class='fleche'>".$order."</p>";
    if($order<$max_ordre){echo"<a href='php/order_plus_gal.php?order=".$order."' class='fleche'>↓</a>";}
    echo"</td>
    <td><a href='php/supprimer_gal.php?id=".$id."' class='sup'>Supprimer</a></td></tr>";
}?>
</table>
