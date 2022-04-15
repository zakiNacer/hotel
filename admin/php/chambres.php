<?php include('connect.php');
$tab=$db->query('SELECT texte FROM text_chambres')->fetch()->texte; ?>
    <h1>Chambres</h1>
<form action='php/modif_chambres.php' method='post'>
        <textarea name='chambres' cols='150' rows='12'><?php echo $tab; ?></textarea>
        <br><input type='submit' value='Modifier'>
</form>