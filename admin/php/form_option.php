<?php
$id=$_GET['id']; ?>
<form action='php/ajout_opt.php?id=<?php echo $id; ?>' method='post'>
<textarea name='option' cols='40' rows='1'>- </textarea>
<textarea name='prix' cols='5' rows='1'> €</textarea>
<input type='submit' value='ajouter'>
</form>
