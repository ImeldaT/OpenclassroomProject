
<meta http-equiv="content-language" content="fr" />
<link href='Public/styles/mef.css' rel='stylesheet' type='text/css' />
<link href='Public/Style1.css' rel='stylesheet' type='text/css' />
<script language="javascript" type="text/javascript">

	var i1 = new Image;
	var i2 = new Image;
	var i3 = new Image;
	var i4 = new Image;
	var i5 = new Image;
	var i6 = new Image;
	var i7 = new Image;
	var i8 = new Image;
	
	var i9 = new Image;
	var i10 = new Image;
	var i11 = new Image;
	var i12 = new Image;
  //////////////////////////////////////////////////////////////  
    i1.src = "Public/images/Organiser_vos_evenements_avec_Utrav.jpg";
	i2.src = "Public/images/Istanbul.jpg";
	i3.src = "Public/images/Formation_en_ligne.jpg";
	i4.src = "Public/images/Paris.jpg";
	i5.src = "Public/images/Egypte.jpg";
	i6.src = "Public/images/Evenement_Extraordinaire.jpg";
	i7.src = "Public/images/Decouvrez_la_mecque.jpg";
	i8.src = "Public/images/Entreprise.jpg";
    
    i9.src = "Public/images/Egypte.jpg";
	i10.src = "Public/images/Evenement_Extraordinaire.jpg";
	i11.src = "Public/images/Decouvrez_la_mecque.jpg";
	i12.src = "Public/images/Entreprise.jpg";
//////////////////////////////////////////////////////////////////////////////////////////////
	
</script>
</head>
<body>

<div id="centre">
					<div id="barre">
						
						<input type="text" id="minutage" value="2" onClick='this.value=''' value='2' /><br />
						
					</div>				
					<div class="texte_photo" id="texteph" onmouseover='demarrer()'>Titre de la photo</div>
										
					<div id="precedent">
						<input type="button" value="<<" title="Photo précédente" onClick="defiler('arriere')" />
					</div>
					<div style="position:absolute;">
						<img src="images/image-defaut.jpg" alt="" id="album"/>
					</div>
					<div id="suivant">
						<input type="button" value=">>" title="Photo suivante" onClick="defiler('avant')" />
					</div>			
				</div>
    </body>
<script type="text/javascript" language="javascript">

    var chaine_img="Organiser_vos_evenements_avec_Utrav.jpg;Istanbul.jpg;Formation_en_ligne.jpg;Paris.jpg;"
	chaine_img += "Egypte.jpg;Evenement_Extraordinaire.jpg;Decouvrez_la_mecque.jpg;Entreprise.jpg;";
	chaine_img += "Egypte.jpg;Evenement_Extraordinaire.jpg;Decouvrez_la_mecque.jpg;Entreprise.jpg;";
    //////////////////////////////////////
	
	var tab_img=chaine_img.split(';');
	var nb_img = tab_img.length;
	var chemin ="Public/images/";
	var position = 0;
    var interval = 0;
	
	document.getElementById("album").src=chemin + tab_img[position];
	document.getElementById("mini1").src=chemin + tab_img[position];
	document.getElementById("mini2").src=chemin + tab_img[position+1];
	document.getElementById("mini3").src=chemin + tab_img[position+2];
	document.getElementById("mini4").src=chemin + tab_img[position+3];
	document.getElementById("mini1").style.border="#84020b 3px solid";

	traite_texte(tab_img[position]);
    
    function demarrer()
{

var temporisation = 5000;
if(!isNaN(parseInt(document.getElementById('minutage').value)))
{
temporisation = document.getElementById('minutage').value*1000;
if(temporisation<5000)
temporisation=5000;
}
    interval = setInterval(function(){ defiler('avant') },temporisation);
}

function arreter()
{
alert('Arrêt du diaporama');
}

	function defiler(comment)
	{	

		if(comment=="avant")
			position++;
		else
			position--;
			
		if(position<0)
		{
			position = nb_img-1;
			document.getElementById("mini1").src=chemin + tab_img[position-3];
			document.getElementById("mini2").src=chemin + tab_img[position-2];
			document.getElementById("mini3").src=chemin + tab_img[position-1];
			document.getElementById("mini4").src=chemin + tab_img[position];					
			
		}
		else if(position == nb_img)
		{
			position = 0;
			document.getElementById("mini1").src=chemin + tab_img[position];
			document.getElementById("mini2").src=chemin + tab_img[position+1];
			document.getElementById("mini3").src=chemin + tab_img[position+2];
			document.getElementById("mini4").src=chemin + tab_img[position+3];			
		}
		else if(position % 4 ==0 && comment=="avant")
		{
			document.getElementById("mini1").src=chemin + tab_img[position];
			document.getElementById("mini2").src=chemin + tab_img[position+1];
			document.getElementById("mini3").src=chemin + tab_img[position+2];
			document.getElementById("mini4").src=chemin + tab_img[position+3];			
		}
		else if((position+1) % 4 ==0 && comment=="arriere" && position!=0)
		{
			document.getElementById("mini1").src=chemin + tab_img[position-3];
			document.getElementById("mini2").src=chemin + tab_img[position-2];
			document.getElementById("mini3").src=chemin + tab_img[position-1];
			document.getElementById("mini4").src=chemin + tab_img[position];			
		}

		document.getElementById("album").src=chemin + tab_img[position];

		for(var indice=1;indice<5;indice++)
		{
			document.getElementById("mini" + indice).style.border="#333 1px solid";
			if(document.getElementById("mini" + indice).src==document.getElementById("album").src)
				document.getElementById("mini" + indice).style.border="#84020b 3px solid";
		}

		traite_texte(tab_img[position]);	
	}
	
	function selection(img_source)
	{
		var image_en_cours = document.getElementById("mini" + img_source).src;
		var pos_caractere = image_en_cours.lastIndexOf("/",image_en_cours);
		
		document.getElementById("album").src=image_en_cours;
		
		for(var indice=1;indice<5;indice++)
		{
			document.getElementById("mini" + indice).style.border="#333 1px solid";
		}		
		document.getElementById("mini" + img_source).style.border="#84020b 3px solid";
		
		//alert(image_en_cours);
		//alert(pos_caractere);
		
		image_en_cours = image_en_cours.substring(pos_caractere+1);
		//alert(image_en_cours);			
			
		for(var defil=0;defil<nb_img;defil++)
		{
			//alert(tab_img[defil]);
			if(tab_img[defil]==image_en_cours)
			{
				position=defil;
				break;
			}
		}

		traite_texte(image_en_cours);
		
	}
	
	function traite_texte(texte)
	{
		var chaine="";
		var tab_mots=texte.replace(".jpg","").split('-');

		//départ 1 pour ignorer numéro préfixe photo.
		for(var compteur=1;compteur<tab_mots.length;compteur++)
		{
			//Majuscule en début de mot si plus de deux lettres
			if(tab_mots[compteur].length>2 || compteur==1)
				chaine += tab_mots[compteur].substr(0,1).toUpperCase() + tab_mots[compteur].substr(1).toLowerCase() + " ";
			else
				chaine += tab_mots[compteur] + " ";
		}

		document.getElementById("texteph").innerText = chaine;
	}	
	
</script>
</html>
	