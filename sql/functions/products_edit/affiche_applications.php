<?php
/* ===================== APPLICATION =========================*/
    if($application!= ""){
        $sql_affiche_application = "SELECT * FROM `med_application` WHERE `id_appli` = $application";
        $requete_affiche_application= $db->query($sql_affiche_application);
        $affiche_application = $requete_affiche_application->fetchAll();
      
        $affiche_application= $affiche_application[0]["application_descriptions"];
    }else{$affiche_application = NULL;}

?>
