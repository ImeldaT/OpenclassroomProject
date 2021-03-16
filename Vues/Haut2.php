<?php 
function afficherDate($lang) {
/////La date sur le serveur
$jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
$jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$months["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];

$months["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

$months["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];

$d = getdate();

$wj = $d["wday"];
$mj = $d["mday"];
$m = $d["mon"];
$y = $d["year"];

$d= $jours[$lang][$wj]. " " . $mj . " " . $months[$lang][$m-1] . " " . $y;
return $d;
    
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="Public/Style1.css" />
</head>
<div id="menu5">
    <table width="100%">
    <tr>
        <td><img src="Public/Image/logo.png" class="topimg3" alt="image"> </td>
        <td><h2>Bienvenue dans votre espace <?php echo $_SESSION['nom']."   ".$_SESSION['prenom']; ?></h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td><img src="Public/Image/logo.png" class="topimg3" alt="image"></td>
        </tr>
    </table>
<nav>     
   
    
         
       <a id="1" href="index.php?action=vueAcceuilleUtilisateur" >Acceuil </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="1" href="index.php?action=Ultrave">Newsletter </a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="1"  href="index.php?action=utrav" >Qui sommes nous? </a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
         <li><a id="1" href="index.php?action=deconnexion" >Deconnexion </a></li>
     
    </nav>
    <?= afficherDate(FR); ?>
    </div>