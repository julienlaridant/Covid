<?php 
include "class/User.php";
include "Class/Personnage.php";
//GESTION DE LA BASE -----------------------
$mabase = null;
$access = null;
$errorMessage="";
try{
            $user = "lapro_site";
            $pass = "TDataSource1234";

            $mabase = new PDO('mysql:host=mysql-julienlaridant.alwaysdata.net;dbname=julienlaridant_virus','229075_covid','8DZFV8dzfv');
            

}catch(Exception $e){
    $errorMessage .= $e->getMessage();
}
$Joueur1 = new User($mabase); 

//GESTION DES SESSION -----------------------
if(!is_null($mabase)){
    if (isset($_SESSION["Connected"]) && $_SESSION["Connected"]===true){
        $access = true;
        $access = $Joueur1->deconnectToi();
    }else{
        $access = false;
        $errorMessage.= "Vous devez vous connectez";
        // Affichage de formulaire si pas deconnexion
        $access = $Joueur1->ConnectToi();
    }
   
}else{
    $errorMessage.= "Vous n'avez pas les bases";
}

