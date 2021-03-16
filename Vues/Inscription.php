<!doctype>
<html>
<?php 
include("Haut.php");
?>


<body class="arriereplan" > 


    <script type="text/javascript">
		function motpasse(){
			var pass = document.getElementById("mdp").value;
			if  (pass.length<6 || pass.length>10) {
					window.alert("le mot de passe doit etre compris entre 6 et 10 ");
			}
		}
		function motpasseconfirm(){
			if (document.getElementById("mdp").value.length != document.getElementById("motdp").value.length) {
				alert("Mot de passe incompatible");
			}
		}
		function majusc(){
	  //solution 1
	var varNom=document.getElementById("idNom");
	var valeurSaisie=varNom.value;
	var texteEnMaj=valeurSaisie.toUpperCase() ;
document.getElementById("idNom").value=texteEnMaj;
  }
	</script>

<body >
    
    <div align="center">
        <u><h2>Cr&eacute;ation de compte </h2></u>
        <center>(Ce compte vous permettra de participer &agrave; nos diff&eacute;rentes activit&eacute;s)</center>
        <br/><br/><br/><br/>
        
        
    <form action="index.php" method="post" align="center">
    <h3>
        
  <pre>
Entrez votre nom d'utilisateur *&nbsp; <input type="text" name="login" id="idNom" onBlur="majusc()" ><br>

<label for="code">Entrez votre mot de passe * </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="code" id="mdp" onblur="motpasse()"><br>

<label for="password">Confirmer votre mot de passe *</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="code" id="mdp" onblur="motpasseconfirm()"><br>

<label for="lnom">Entrez votre nom *</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nom" id="nom" ><br>

<label for="prenom">Votre pr&eacute;nom *</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="prenom" id="prenom"><br>

<label for="numero"> Votre num&eacute;ro de t&eacute;l&eacute;phone *</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="numero"><br>

<label for="adresse"> Votre adresse *</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="adresse"> <br><br>

<label for="email">Entrez votre email *  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="idEmail"><br>

<label for="naissance">Date naissance * </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="naissance" id="naissance" type="date"><br>
    
    <input type="submit" value="S'inscrire">&nbsp;&nbsp;&nbsp;<input type=reset value="Annuler" javascript: history.go(-1)>&nbsp;<input type="button" value="Page Precdente" onclick="javascript: history.go(-1)">
    </pre>
    </h3>
        </form>
    </div>
    
    </body>