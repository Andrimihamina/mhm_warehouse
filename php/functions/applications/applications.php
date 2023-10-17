<?php
include_once("../../../../../php/dns/connect.php");

//APPLICATION MEDICALE
$sql_appli = "SELECT * FROM `med_application`  ORDER BY `application_descriptions` ASC";

//On execute la requete
$requete_appli = $db->query($sql_appli);

//On recupere les donnes
     $applications = $requete_appli->fetchAll();
   
    //On ecrit le contenue de la page

//APPLICATION MEDICALE
$sql_appli_modif = "SELECT * FROM `medicine_application`  ORDER BY `med_name` ASC";

//On execute la requete
$requete_appli_modif = $db->query($sql_appli_modif);

//On recupere les donnes
     $applications_modif = $requete_appli_modif->fetchAll();
?>