<?php
include_once("../../../../../php/dns/connect.php");

    //LOCATION MEDICALE
    $sql_location = "SELECT * FROM `med_location`  ORDER BY `location_descriptions` ASC";

    //On execute la requete
    $requete_location = $db->query($sql_location);

    //On recupere les donnes
         $locations = $requete_location->fetchAll();
       
        //On ecrit le contenue de la page

//CLASSIFICATION MEDICALE
$sql_loc_modif = "SELECT * FROM `medicine_location`  ORDER BY `med_name` ASC";

//On execute la requete
$requete_loc_modif = $db->query($sql_loc_modif);

//On recupere les donnes
     $classifications_loc = $requete_loc_modif->fetchAll();

?>