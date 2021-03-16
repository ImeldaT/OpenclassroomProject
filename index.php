<?php 
require ("Models/PFEManager.php");
require ("Controllers/PFEControllers.php");
$action = isset($_GET["action"])? $_GET["action"] : "index";

if($action=="index")
	indexAction();
elseif($action=="Verifier")
	VerifierAction();
elseif($action=="Voyage")
	VoyageAction();
elseif($action=="Evenement")
	EvenementAction();
elseif($action=="Formation")
	FormationAction();
elseif($action=="Religieu")
	ReligieuAction();
elseif($action=="Tourisme")
	TourismeAction();
elseif($action=="Langue")
	LangueAction();
elseif($action=="Etudiant")
	EtudiantAction();
elseif($action=="Professionnelle")
	ProfessionnelleAction();
elseif($action=="Lieu")
	LieuAction();
elseif($action=="choix")
	choixAction();
elseif($action=="utrav")
	utravAction();
elseif($action=="Connexion")
	ConnexionAction();
elseif($action=="Inscription")
	InscriptionAction();
else
    indexAction();

 ?>