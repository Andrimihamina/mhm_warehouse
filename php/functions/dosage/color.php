<?php
include_once("../../../../../php/dns/connect.php");

    //UNITS MEDICALE
    $sql_colors = "SELECT * FROM `cons_colors`  ORDER BY `colors_descriptions` ASC";

    //On execute la requete
    $requete_colors = $db->query($sql_colors);

    //On recupere les donnes
         $colors = $requete_colors->fetchAll();
      
        //On ecrit le contenue de la page
?>