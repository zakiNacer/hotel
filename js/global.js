$( window ).resize(function() {

    var hauteur_header = $('#index-header').width()/(1500/370);
    var hauteur_img = $('#index-bandeau-img').height();

	var largeur_header = $('#index-header').width();

	if(largeur_header > 550)
	{
		$('#index-header').css("height", hauteur_header+'px');
	}
	else
	{
		$('#index-header').css("height", 'auto');
	}

	if((hauteur_header -220 ) < (-45))
	{
		hauteur_header = -45;
	}
	else
	{
		hauteur_header = hauteur_header - 220;
	}

	$('#header-menu-titre').css("margin-top", hauteur_header +'px');

});


$(document).ready(function()
{	
	var hauteur_header = $('#index-header').width()/(1500/370);
	
	var largeur_header = $('#index-header').width();

	if(largeur_header > 550)
	{
		$('#index-header').css("height", hauteur_header+'px');
	}
	else
	{
		$('#index-header').css("height", 'auto');
	}

	if((hauteur_header -220 ) < (-45))
	{
		hauteur_header = -45;
	}
	else
	{
		hauteur_header = hauteur_header - 220;
	}

	$('#header-menu-titre').css("margin-top", hauteur_header +'px');
})

function MenuResp()
{
	var MenuResponsive = document.getElementById('menuresp-ul');

	if(MenuResponsive.clientHeight == "0")
	{
		MenuResponsive.style.height = "240px";
		MenuResponsive.style.marginTop = "20px";
		document.getElementById('header-menu-resp-titre').innerHTML = "FERMER";
	}
	else
	{
		MenuResponsive.style.height = "0px";
		MenuResponsive.style.marginTop = "0px";
		document.getElementById('header-menu-resp-titre').innerHTML = "MENU";
	}
}

/*function Reserver()
{
	if (window.XMLHttpRequest) 
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			 xmlhttp=new XMLHttpRequest();
			 //xmlhttp.timeout = 3000;

		}
		else
		{ // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}


			
		xmlhttp.onreadystatechange=function() 
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200) 
			{
				var Reponse = xmlhttp.responseText;

				alert(Reponse);
			}
		}
		   
		var fd = new FormData();

		var Nom = document.getElementById('reservation-nom-prenom').value;
		var Ville = document.getElementById('reservation-ville-cp').value;
		var Mail = document.getElementById('reservation-mail').value;
		var Tel = document.getElementById('reservation-tel').value;
		var Arrivee = document.getElementById('reservation-arrivee').value;
		var Depart = document.getElementById('reservation-depart').value;
		var Adultes = document.getElementById('reservation-adultes').value;
		var Enfants = document.getElementById('reservation-enfants').value;
		var Message = document.getElementById('reservation-message').value;
		
		fd.append('type', 'reservation');
		fd.append('nom', Nom);
		fd.append('ville', Ville);
		fd.append('mail', Mail);
		fd.append('tel', Tel);
		fd.append('arrivee', Arrivee);
		fd.append('depart', Depart);
		fd.append('adultes', Adultes);
		fd.append('enfants', Enfants);
		fd.append('message', Message);
		fd.append('g-recaptcha-response', document.getElementById("g-recaptcha-response").value);

		xmlhttp.open("POST", 'ajax/reservation.php',true);
		xmlhttp.send(fd);
}*/

$(window).scroll(function() {
	
	var PosScroll = $( "html" ).scrollTop();
	var hauteur_img = $('#index-bandeau-img').height();

	if(PosScroll > hauteur_img)
	{
		$('#header-menu-resp').css("position",'fixed');
		$('#header-menu-resp').css("top",'0px');
	}
	else
	{

		$('#header-menu-resp').css("position",'relative');
		$('#header-menu-resp').css("top",'-5px');
		
	}
});

function GoEnglish()
{
	document.location.href = "indexen.php";
}

function GoFrench()
{
	document.location.href = "index.php";
}