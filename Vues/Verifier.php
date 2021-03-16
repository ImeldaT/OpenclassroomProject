<?php 
include("Haut.php");
?>

<?php

if(!isset($_POST["Login"]) || !isset($_POST["Password"]) || $_POST["Login"] != "Imelda" || $_POST["Password"] !="toko") {

include("Acceuil.php");
exit();
}

session_start();
$_SESSION["Login"]=$_POST["Login"];
header ("location:Acceuil.php");
?>
