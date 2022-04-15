<?php include('connect.php'); ?>
    <h1>Hotel</h1>
    <?php 
    $tab=$db->query('SELECT * FROM header')->fetchAll(); 
    foreach($tab as $tab){
        ?>
<form action='php/modif_header.php' method='post'>
        Nom: <input type='texte' name='nom' value='<?php echo $tab->nom; ?>'></input><br><br>
        Ville: <input type='texte' name='ville' value='<?php echo $tab->ville; ?>'></input><br><br>
        Contenu bouton: <input type='texte' name='bouton' value='<?php echo $tab->bouton; ?>'></input><br><br>
        Téléphone: <input type='texte' name='tel' value='<?php echo $tab->tel; ?>'></input><br><br>
        <input type='submit' value='Modifier'>
</form>
<?php } ?>