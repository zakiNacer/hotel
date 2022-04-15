/******************************************
* @File widget_ch_reservation.js
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 25/01/2017
* @Desc Widget Contact Hotel Reservation Generator
******************************************/
var domain_site = 'https://www.contact-hotel.com';

/******************************************
* @Name window.onload.anonymous
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 25/01/2017
* @Desc Prise en charge de la crÃ©ation du widget contact-hotel
******************************************/
window.onload = function(){
    if('undefined' == typeof window.jQuery){
        document.getElementById('contact_hotel_widget_reservation').innerHTML = 'Le widget de rÃ©servation requiert une version >= 1.4.2 de jQuery';
        throw new Error('Le widget de rÃ©servation requiert une version >= 1.4.2 de jQuery');
    }

    jQuery(document).ready(function()
        {
        // Let's generate the widget and populate the div
        widget_reservation_code_generation();
        

        // Elements interactifs
        widget_reservation_click_handler();
        widget_reservation_update_fields_handler();
        
        // Test Ã  l'envoi
        widget_reservation_submit_handler();
        });
};


/******************************************
* @Name widget_reservation_code_generation
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 25/01/2017
* @Desc GÃ©nÃ©ration du widget de rÃ©servation Contact-Hotel
******************************************/
function widget_reservation_code_generation(){
	var container = document.getElementById('contact_hotel_widget_reservation');
    jQuery('#contact_hotel_widget_reservation').html('<div id="widget_ch_loader"><img src="'+domain_site+'/images/loading.gif" title="Chargement du widget" alt="Chargement du widget" /></div>');
    jQuery('#widget_ch_loader').css('height',container.dataset['height']);
    jQuery('#widget_ch_loader').css('width',container.dataset['width']);
    jQuery.ajax({
        method: 'GET', // No need to see parameters in the URL
        url: domain_site+'/cgi-local/widget_ch_reservation.pl',
        context: document.body,
        crossDomain: true,
        data: container.dataset, // Shortcut HMTL5 javascript property dataset that contains a map of the data-like properties
    }).done(function(response){
        // Mise Ã  jour du contenu de la div
        jQuery(container).html(response);

// GD - 20181029 : Passage du token pour ne pas afficher le meilleur tarif garanti
        // RequÃªte prix mini
        jQuery.ajax({
            method: 'GET', // No need to see parameters in the URL
            url: domain_site+'/cgi-local/affiche_detail_reservit.pl',
            context: document.body,
            crossDomain: true,
            data: {
                action : 'recherche_prix_mini',
                id_hotel: jQuery('#widget_reservation_id_hotel').val(),
                langue: container.dataset['language'],
                token: container.dataset['token']
            }
        }).done(function(response){
            if(response != ''){
                jQuery('#widget_tarif_mini').html(response);
                jQuery('#widget_tarif_mini').show();
            }else{
                var text_tmp = jQuery('#widget_tarif_mini').text();
                jQuery('#widget_tarif_mini_container').text('');
                jQuery('#widget_tarif_mini_container').text(text_tmp);
            }
        });


        // Mise Ã  jour des styles et des actions des champs
        widget_reservation_prepare_widget();

    });

}



/******************************************
* @Name widget_reservation_prepare_widget
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 02/02/2017
* @Desc PrÃ©paration des styles depuis les donnÃ©es du widget
* @Desc PrÃ©paration des Ã©lÃ©ments et leurs Ã©vÃ©nements associÃ©s
******************************************/
function widget_reservation_prepare_widget(){
    var container = document.getElementById('contact_hotel_widget_reservation');
    // Telephone - Si le champ est vide on cache la div parent
    if(jQuery('#ch_telephone').text() == ''){
        jQuery('#ch_telephone').parent().hide();
    }



    jQuery.noConflict();
    // Datepicker sur les champs dates
    var currentDate = new Date();
    var departureDate = new Date();
    departureDate.setDate(currentDate.getDate() + 1);
    jQuery('.widget_datepicker').first().datepicker({
        minDate: 0,
        dateFormat: "dd/mm/yy",
        onClose: widget_update_datepicker
    });
    jQuery('.widget_datepicker').last().datepicker({
        minDate: 1,
        dateFormat: "dd/mm/yy"
    });
    // On met Ã  jour les deux champs dates
    jQuery('.widget_datepicker').first().datepicker( "setDate", currentDate );
    jQuery('.widget_datepicker').last().datepicker( "setDate", departureDate );




    // Mise Ã  jour des styles
    // Dimensions
    jQuery('#contact_hotel_widget_reservation_container').css('width', container.dataset['width']);
    jQuery('#contact_hotel_widget_reservation_body').css('height', container.dataset['height']);
    // Couleurs
    jQuery('#contact_hotel_widget_reservation_container').css('border-color', container.dataset['color']);
    
    jQuery('#contact_hotel_widget_reservation_header').css('background-color', container.dataset['color']);
    jQuery('#contact_hotel_widget_reservation_body').css('color', container.dataset['color']);
    jQuery('#contact_hotel_widget_reservation_footer').css('border-color', container.dataset['color']);
    jQuery('#contact_hotel_widget_reservation_footer').css('color', container.dataset['color']);
    jQuery('.info-telephone').css('background-color', container.dataset['color']);
    jQuery('.info-telephone').css('border-color', container.dataset['color']);
    jQuery('#contact_hotel_widget_reservation_body').find('input[type="submit"]').css('background-color', container.dataset['color']);
    jQuery('.widget_ch_reservation-btn').css('background-color', container.dataset['color']);
    jQuery('.more_info_handler,.less_info_handler').css('background-color', container.dataset['color']);
}










/******************************************
* @Name widget_reservation_click_handler
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 02/02/2017
* @Desc Gestion des Ã©lÃ©ments cliquables
******************************************/
function widget_reservation_click_handler(){
    // Clic sur "Plus d'info"
    jQuery('#contact_hotel_widget_reservation').on('click','.more_info_handler',function(e){
        jQuery('#widget_more_info').hide();
        jQuery('#widget_more_info_container').show();
    });


    // Clic sur "Retour"
    jQuery('#contact_hotel_widget_reservation').on('click','.less_info_handler',function(e){
        jQuery('#widget_more_info_container').hide();
        jQuery('#widget_more_info').show();
    });
}








/******************************************
* @Name widget_reservation_update_fields_handler
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 02/02/2017
* @Desc Gestion des champs interactifs
******************************************/
function widget_reservation_update_fields_handler(){
    // Update select Enfants
    // Ajout de x champs texte pour saisir l'Ã¢ge des enfants
    jQuery('#contact_hotel_widget_reservation').on('change','#nbchd_ch',function(e){
        var max_children = 3; // Nombre maximal de champs texte
        var current_children_num = jQuery('.child-age').length; // Nombre de champs prÃ©sents
        var submitted_children_num = jQuery(this).val(); // Nombre de champs souhaitÃ©s
        var html_children_ages = jQuery('.widget-ch-children-age').html(); // HTML actuel
        // Sauvegarde des valeurs potentiellement saisies
        var current_values = [];
        jQuery('.child-age input[name="child-age"]').each(function(){
            current_values.push(jQuery(this).val());
        });


        // Pour i de nb champs actuels Ã  nb enfants saisi - Affichage des champs texte manquants
        for(var i = current_children_num; i < submitted_children_num; i++){
            html_children_ages += '<span class="child-age">Ã‚ge <input type="text" maxlength="2" size="2" name="child-age"/></span>';
        }

        // Affichage final des champs texte de l'Ã¢ge des enfants
        jQuery('.widget-ch-children-age').html(html_children_ages);

        // Pour i de nb enfants saisi Ã  nb enfants max - Suppression des champs texte
        for(var i = max_children-1; i >= submitted_children_num; i--){
            if(jQuery('.child-age')[i] != undefined){
                jQuery('.child-age')[i].remove();                    
            }
        }

        // On affilie les valeurs aux champs
        jQuery('.child-age input[name="child-age"]').each(function(index){
            jQuery(this).val(current_values[index]);
        });
    });





}





/******************************************
* @Name widget_update_datepicker
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 01/02/2017
* @Desc Met Ã  jour le contenu du datepicker d'arrivÃ©e
******************************************/
function widget_update_datepicker(e){
    // SE - ADN - 20171127     
    jQuery.noConflict(); // Stops $ from workng

    // On rÃ©cupÃ¨re la date d'arrivÃ©e
    var currentDate = jQuery(this).datepicker("getDate");
    // On calcule la date du lendemain
    var tomorrow = new Date(currentDate.getTime() + 24 * 60 * 60 * 1000);
    // On met Ã  jour la date
    jQuery('.widget_datepicker').last().datepicker( "setDate", tomorrow );
}











/******************************************
* @Name widget_reservation_submit_handler
* @Author Pierre-Yves Pouilleul <pierre-yves@illicoweb.com>
* @Date 02/02/2017
* @Desc Tests des valeurs envoyÃ©es Ã  l'envoi du formulaire
******************************************/
function widget_reservation_submit_handler(){
    jQuery('#contact_hotel_widget_reservation').on('submit','form',function(e){
        var isCorrect = true;
        var errorMessage = '';
        jQuery('.child-age input[name="child-age"]').each(function(){
            if(jQuery(this).val() == ''){
                errorMessage = "Merci de renseigner l'Ã¢ge des enfants";
                isCorrect = false;
            }
        });

        // Affichage du message d'erreur
        jQuery('.widget-ch-submit-info').html(errorMessage);
        return isCorrect;
        
    });
}