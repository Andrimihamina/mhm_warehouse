<?php
include_once("../../../../../php/dns/connect.php");

     //MEDICINE FLUX IN
     $sql_flux_in= "SELECT * FROM `flux_in` WHERE `done` = '0'";

     //On execute la requete
     $requete_flux_in = $db->query($sql_flux_in);

     //On recupere les donnes
          $products_flux_in= $requete_flux_in->fetchAll();
          
     //On ecrit le contenue de la page
?>