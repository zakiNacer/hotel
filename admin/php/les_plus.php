<?php include('connect.php'); ?>
<style>
    td{
        text-align:center;
        width: 100px;
        border:1px solid black;
        padding:10px;
    }
    .fleche{
        font-size:200%;
    }
    .sup, .sup:hover{
        color:red;
    }
    </style>
    <h1>Les +</h1>
    <form method='post' action='php/ajout_plus.php' enctype='multipart/form-data'>
    <input type='file' name='fichier'>
    <input type='submit' value='ajouter'>
    </form>
    <br>
    <table>
        <tr>
            <td><h2>Icone</h2></td>
            <td><h2>Ordre</h2></td>
            <td><h2>Supprimer</h2></td>
</tr>
<?php 
$tab=$db->query('SELECT MAX(ordre) as max_order FROM pic_hotel')->fetchAll();
foreach($tab as $tab){
    $max_order=$tab->max_order;}
$tab=$db->query('SELECT * FROM pic_hotel ORDER BY ordre')->fetchAll();
foreach($tab as $tab){
    $order=$tab->ordre;
echo"<tr><td><img src='../".$tab->picto_lien."' alt='".$tab->picto_alt."'></td>
<td>";
 if($order>1){ echo"<a href='php/order_moins_plus.php?order=".$order."' class='fleche'>↑</a>";}
    echo"<p class='fleche'>".$order."</p>";
    if($order<$max_order){echo"<a href='php/order_plus_plus.php?order=".$order."' class='fleche'>↓</a>";}
    echo"</td>
<td><a href='php/supprimer_plus.php?id=".$tab->photel_id."' class='sup'>Supprimer</a></td></tr>";
} ?>
</table>