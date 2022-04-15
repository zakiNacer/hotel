<?php include('connect.php'); ?>
<style>
    .sup, .sup:hover{
        color:red;
    }
    .ajout, .ajout:hover{
        text-decoration:none;
        font-size:200%;
    }
    </style>
    <h1>Tarifs</h1>
    <a href='?form_champ' class='ajout'>Ajouter un champ</a>
    <br><br>
	<?php
		$tab=$db->query("SELECT * FROM main_tarif")->fetchAll();
		foreach ($tab as $value):
			$nom=$value->nom_main;
			$id=$value->mtarif_id;
            $prix=$value->prix;
            
            if(empty($prix)){ ?>
    <form action='php/modif_tarifs_nom.php?id=<?php echo $id; ?>' method='post'>
        <textarea name='nom' cols='40' rows='1'><?php echo $nom; ?></textarea>
        <input type='submit' value='Modifier'>
        <a class='sup' href='php/supprimer_tarif.php?id=<?php echo $id; ?>'>Supprimer</a>
    </form>
    <?php
    }else{ ?>
        <form action='php/modif_tarifs_nom.php?id=<?php echo $id; ?>' method='post'>
            <textarea name='nom' cols='40' rows='1'><?php echo $nom; ?></textarea>
            <textarea name='prix' cols='5' rows='1'><?php echo $prix; ?></textarea>
            <input type='submit' value='Modifier'>
            <a class='sup' href='php/supprimer_tarif.php?id=<?php echo $id; ?>'>Supprimer</a>
        </form>
		<?php }
        $tab2=$db->query("SELECT * FROM option_tarif WHERE id_from_main = $id")->fetchAll();
		foreach ($tab2 as $value2):
            $id_op=$value2->id;
            $prix_opt=$value2->prix_opt;
            ?>
        <form action='php/modif_tarifs_option.php?id=<?php echo $id_op; ?>' method='post'>
            <textarea name='option' cols='40' rows='1'><?php echo $value2->nom_option; ?></textarea>
            <?php if(!empty($prix_opt)){
            echo"<textarea name='prix' cols='5' rows='1'>".$prix_opt."</textarea>";
            } ?>
            <input type='submit' value='Modifier'>
            <a class='sup' href='php/supprimer_opt.php?id=<?php echo $id_op; ?>'>Supprimer l'option</a>
        </form>							
        <?php endforeach; 
	 ?>
     <a href='?form_option&id=<?php echo $id; ?>'>Ajouter option</a>
	<br>
	<br>
	<?php endforeach;  ?>