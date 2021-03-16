<?php 
include("Haut.php");
?>


<body class="arriereplan" > 

    
    <div align="center">
        
   
        <u><h2>Connecter vous &agrave; votre compte </h2></u>
     <pre>    
    <form action="Verifier.php" method="post" align="center">
   Login :&nbsp;<input type="text" name="Login" /><br/>
 Password :&nbsp;<input type="password" name="Password" /><br> 
 
 <input type="submit" value="Connexion">&nbsp;<input type=reset value="Annuler" >&nbsp;<input type="button" value="Page Precdente" onclick="javascript: history.go(-1)">
    
    
    </form>
   
         </pre>
        Vous n'avez pas de compte?<a href="index.php?action=Inscription">&nbsp;S'inscrire </a>
        
    </div>
        
    </body>