<?php
     function connexion()
     {
         try
         {
             $connecter=new PDO('mysql:host=localhost;dbname=projetgogo;charset=utf8','root','');
             return $connecter;
         }
         catch(Exception $e)
         {
             die('erreur de connexion a la base de donner');
             
         }
     }
   function  modele_nouvelle_formation($nom,$prenom,$idrubrique,$numero,$adresse,$email,$Age)
       {
    
        $db=connexion();
       //die($nom."  ".$prenom."  ".$idrubrique."  ".$numero."  ".$adresse."  ".$email."  ".$Age);
       mail($email,"votre inscription a ete effectué","felicitations vous etes  inscrit ");
        $db->exec("insert into personne( NomPersonne,PrenomPersonne,idrubrique,DateInscription,Telephone,Adresse,Email,Age) values('$nom','$prenom',$idrubrique,now(),'$numero','$adresse','$email','$Age')");
        
    }
   function  model_liste_formation()
    {
        $db=connexion();
        return $db->query('select *from formation');
    }
   function   model_liste_rubrique_appartenant_a_fromation($id)
    {
        
        $db=connexion();
        return $db->query("select *from rubrique where idformation=$id");
        
        
    }
    function  model_detail_rubrique($id)
    {
        
        $db=connexion();
        return $db->query("select *from rubrique where idrubrique=$id");
    }

function liste_evenement()
{   $db=connexion();
   $reponse= $db->query('select idEvenement ,nom,prenom ,description,dateDemande from evenement,personne where evenement.login=personne.login');
    if($reponse)
        return $reponse->fetchAll();
    return false;
}
function liste_des_inscrits_formation()
{
    $db=connexion();
    $reponse=$db->query('select rubrique_personne.id,nom,prenom,Nomrubrique ,rubrique_personne.dateInscription from personne,rubrique_personne,rubrique where rubrique_personne.login=personne.login and rubrique_personne.idrubrique=rubrique.idrubrique');
    if($reponse)
        return $reponse->fetchAll();
    else 
        return false;
}
function liste_inscrit_voyage()
{
    $db=connexion();
    $reponse=$db->query('select reservation.id,nom,prenom ,date,prix,depart.nom_destination as depart , arriver.nom_destination as arriver from reservation,vol_destination,destination depart ,destination arriver,personne where reservation.id_voyage=vol_destination.id_destination and vol_destination.id_destination=arriver.id_destination and vol_destination.id_depart=depart.id_destination and reservation.login=personne.login');
    if($reponse)
        return $reponse->fetchAll();
    else 
        return false;
    
}
function modele_liste_des_destination()
{
    $db=connexion();
    return $db->query('select *from destination');
    
}
function liste_compagnie()
{
    
    $db=connexion();
    return $db->query('select *from compagnie');
}
function  modele_reservation($date,$id_depart,$id_destination,$id_compagnie)
{
    $db=connexion();
    $donner=$db->query("select nom_compagnie,vols.id_vol,date,vol_destination.id from vol_destination,vols,compagnie where vol_destination.id_vol=vols.id_vol and vols.id_compagnie=$id_compagnie and id_depart=$id_depart and id_destination=$id_destination and compagnie.id_compagnie=$id_compagnie and date='$date'and nombre_place!=0");
      return $donner->fetch();

}
function  modele_confirmation_reservation($nom2,$prenom,$numero,$adresse,$email)
{
    $db=connexion();
    $db->exec("insert into reservation(nom,prenom,numero,adresse,email) values('$nom','$prenom','$numero','$adresse','$email')");
   // $db->exec("update vol_destination nombre_place=nombre_place-1");
}
function ajout_utilisateur($LoginU,$PasswordU){
    $db=connexion();
    $db->exec("insert into utilisateur(LoginU,PasswordU) 
     values('$LoginU','$PasswordU')");
}
  function modele_inscription($login,$password,$numero,$adresse,$email,$naissance,$nom,$prenom)
  {
      $db=connexion();
      //die($login."  ".$password."   ".$numero."   ".$adresse."   ".$email."   ".$naissance);
      $db->exec("insert into personne(login,password,numero,adresse,email,naissance,DateInscription,nom,prenom) values('$login','$password','$numero','$adresse','$email','$naissance',now(),'$nom','$prenom')");
  }
function acces_espace($login,$password)
{
    $db=connexion();
    return $db->query("select * from personne where  login='$login' and password='$password'")->fetch();
}
function modele_inscription_formation($idrubrique,$login)
{
    $db=connexion();
    $db->exec("insert into rubrique_personne(login,idrubrique,dateInscription) values('$login',$idrubrique,now())");
}
function modele_evenement($description,$login)
{
    $db=connexion();
    $db->exec("insert into evenement(description,login,dateDemande) values('$description','$login',now())");
}
function modele_mes_formation($login)
{
    $db=connexion();
    $reponse=$db->query("select dateInscription,Nomrubrique,nomformation from rubrique_personne,rubrique,formation where login='$login' and rubrique_personne.idrubrique=rubrique.idrubrique and rubrique.idformation=formation.idformation");
    if($reponse)
        return $reponse->fetchAll();
}
function   modele_mes_evenements($login)
{
    $db=connexion();
    $reponse=$db->query("select *from evenement where login='$login'");
    if($reponse)
        return $reponse->fetchAll();
    
}
function nombre_de_visite_incrementer()
{
    $db=connexion();
    $db->exec("update nombreelement set nombre=nombre+1");
}
function modele_nombre_visiteur()
{
    $db=connexion();
   return  $db->query('select nombre from nombreelement ');
}
function modele_reservation_billet($login,$id)
{            
    $db=connexion();
    $db->exec("insert into reservation(login,id_voyage) values('$login',$id)");
}
function modele_mes_voyages($login)
{
    $db=connexion();
    $donner=$db->query("select date,prix,depart.nom_destination as depart , arriver.nom_destination as arriver from reservation,vol_destination,destination depart ,destination arriver where reservation.login='$login' and reservation.id_voyage=vol_destination.id_destination and vol_destination.id_destination=arriver.id_destination and vol_destination.id_depart=depart.id_destination");
    if($donner)
        return $donner->fetchAll();
    else 
        return false;
    

}
function suppression_evenement($id)
{
    $db=connexion();
    $db->exec("delete from evenement where idEvenement=$id");
}
function suppression_formation($id)
{
    $db=connexion();
    $db->exec("delete from rubrique_personne where id=$id");
}
function suppression_reservation($id)
{
    $db=connexion();
    $db->exec("delete from reservation where id=$id");
}
function modele_utilisateur_existe($login)
{
    $db=connexion();
    $reponse= $db->query("select *from personne where login='$login'");
    if($reponse)
        return $reponse->fetchAll();
    else 
        return false;
}

 ?>