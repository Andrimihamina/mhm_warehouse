<?php
include_once("../../../../../php/dns/connect.php");

    //UNITS MEDICALE
    $sql_charrieres = "SELECT * FROM `cons_charrieres`  ORDER BY `charrieres_descriptions` ASC";

    //On execute la requete
    $requete_charrieres = $db->query($sql_charrieres);

    //On recupere les donnes
         $charrieres = $requete_charrieres->fetchAll();
      
        //On ecrit le contenue de la page
?>