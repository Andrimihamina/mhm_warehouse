<?php
include_once("../../../../../php/dns/connect.php");

    //SUB_LOCATION MEDICALE
    $sql_sublocation = "SELECT * FROM `med_sublocation`  ORDER BY `sublocation_descriptions` ASC";

    //On execute la requete
    $requete_sublocation = $db->query($sql_sublocation);

    //On recupere les donnes
         $sublocations = $requete_sublocation->fetchAll();
       
        //On ecrit le contenue de la page
?>