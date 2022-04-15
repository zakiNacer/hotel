<?php include('connect.php');
$tab=$db->query('SELECT texte FROM text_hotel')->fetch()->texte; ?>
    <h1>Hotel</h1>
<form action='php/modif_hot.php' method='post'>
        <textarea name='hotel' cols='150' rows='12'><?php echo $tab; ?></textarea>
        <br><input type='submit' value='Modifier'>
</form>