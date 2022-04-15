<div id="conteneur">

    <div id="index-header">
        <img id="index-bandeau-img" src="pics/bandeau_haut/visuel.png" alt="Intérieur de l'hôtel du Relais">
        <div id="header">



            <div id="header-drapeaux" style="background-image: url('pics/english.jpg');" onClick="GoEnglish()">
            </div>



            <div id="header-menu-titre">

                    <?php 
                    $tab=$db->query("SELECT * FROM header")->fetchAll();
                    foreach($tab as $tab){
                        echo"
                <div id='header-menu-titre-principal'>
                    <div id='header-menu-titre-principal-img'
                        style='background-image: url(pics/bandeau_haut/fond_gris_titre.png)'>
                        <h1>".$tab->nom."<span>".$tab->ville."</span></h1>
                    </div>

                </div>

                <div id='header-menu-titre-secondaire'>
                    <a href='#index-reservation-titre' class='header-reserver'><label>".$tab->bouton."</label></a> </div>

            </div>

            <div id='header-menu-tel'>
                <div id='header-menu-tel-numero' style='background-image: url(pics/bandeau_haut/fond_gris_tel.png);'>
                    <div id='header-menu-tel-img'><img src='pics/bandeau_haut/tel.png'></div>
                    ".$tab->tel."
                </div>
            </div>";
                    } ?>
        </div>

        <div id="header-menu">



            <a href="index.php#index-hotel" class="header-tablecell">HÔTEL</a>
            <a href="index.php#index-chambres" class="header-tablecell">CHAMBRES</a>
            <a href="index.php#index-photos" class="header-tablecell">GALERIE</a>
            <a href="index.php#index-tarifs" class="header-tablecell">TARIFS</a>
            <a href="index.php?tourisme" class="header-tablecell">TOURISME</a>
            <a href="index.php#index-reservation" class="header-tablecell">RÉSERVATION</a>
            <a href="index.php#index-infos" class="header-tablecell">PRATIQUE</a>


        </div>

        <div id="header-menu-resp" onclick="MenuResp()">

            <label id="header-menu-resp-titre">MENU</label>
            <ul id="menuresp-ul">
                <li><a href="index.php#index-hotel" class="header-tablecell">HÔTEL</a></li>
                <li><a href="index.php#index-chambres" class="header-tablecell">CHAMBRES</a></li>
                <li><a href="index.php#index-photos" class="header-tablecell">GALERIE</a></li>
                <li><a href="index.php#index-tarifs" class="header-tablecell">TARIFS</a></li>
                <li><a href="index.php?tourisme" class="header-tablecell">TOURISME</a></li>
                <li><a href="index.php#index-reservation" class="header-tablecell">RÉSERVATION</a></li>
                <li><a href="index.php#index-infos" class="header-tablecell">PRATIQUE</a></li>
            </ul>
        </div>
        <div id="header-menu-degrade-2"></div>

        <div id="header-menu-degrade"></div>
    </div>