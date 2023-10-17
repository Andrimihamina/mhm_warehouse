<?php
include_once("../../../../../php/dns/connect.php");

    //UNITS MEDICALE
    $sql_measurs = "SELECT * FROM `cons_measurs`  ORDER BY `measurs_descriptions` ASC";

    //On execute la requete
    $requete_measurs = $db->query($sql_measurs);

    //On recupere les donnes
         $measurs = $requete_measurs->fetchAll();
      
        //On ecrit le contenue de la page
?>