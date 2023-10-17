<?php
include_once("../../../../../php/dns/connect.php");

    //UNITS MEDICALE
    $sql_units = "SELECT * FROM `med_units`  ORDER BY `units_description` ASC";

    //On execute la requete
    $requete_units = $db->query($sql_units);

    //On recupere les donnes
         $units = $requete_units->fetchAll();
      
        //On ecrit le contenue de la page
?>