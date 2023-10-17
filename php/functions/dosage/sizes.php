<?php
include_once("../../../../../php/dns/connect.php");

    //UNITS MEDICALE
    $sql_sizes = "SELECT * FROM `cons_sizes`  ORDER BY `sizes_descriptions` ASC";

    //On execute la requete
    $requete_sizes = $db->query($sql_sizes);

    //On recupere les donnes
         $sizes = $requete_sizes->fetchAll();
      
        //On ecrit le contenue de la page
?>