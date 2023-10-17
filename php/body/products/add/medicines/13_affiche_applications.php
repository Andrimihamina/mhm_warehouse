<?php
     require_once("../../../../../php/dns/connect.php");

      /*
   ============== APPLICATION 0========================================
   */
  if($_POST["application"]!= ""){
     $sql_affiche_application = "SELECT * FROM `med_application` WHERE `id_appli` = $application";
   
     //On excute directement la requete
     $requete_affiche_application= $db->query($sql_affiche_application);
   
     //On recupere les donnees (fetch ou fetchall)
     $affiche_application = $requete_affiche_application->fetchAll();
   
    $affiche_application= $affiche_application[0]["application_descriptions"];
     }else{
        $affiche_application = "NULL";
     }
       
?>