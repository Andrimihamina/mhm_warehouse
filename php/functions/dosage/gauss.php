<?php
include_once("../../../../../php/dns/connect.php");

    //UNITS MEDICALE
    $sql_gauss = "SELECT * FROM `cons_gauss`  ORDER BY `gauss_descriptions` ASC";

    //On execute la requete
    $requete_gauss = $db->query($sql_gauss);

    //On recupere les donnes
         $gauss = $requete_gauss->fetchAll();
      
        //On ecrit le contenue de la page
?>