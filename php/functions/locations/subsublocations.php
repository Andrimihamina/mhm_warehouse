<?php
include_once("../../../../../php/dns/connect.php");

    //SUB_SUB_LOCATION MEDICALE
    $sql_subsublocation = "SELECT * FROM `med_subsublocation`  ORDER BY `subsublocation_descriptions` ASC";

    //On execute la requete
    $requete_subsublocation = $db->query($sql_subsublocation);

    //On recupere les donnes
         $subsublocations = $requete_subsublocation->fetchAll();
    
    //On ecrit le contenue de la page
?>