<?php
include_once("../../../../../php/dns/connect.php");

     //MEDICINE FLUX IN
     $sql_flux_out= "SELECT * FROM `flux_out` WHERE `id_out` = '$id_out'  ";

     //On execute la requete
     $requete_flux_out = $db->query($sql_flux_out);

     //On recupere les donnes
          $products_flux_out= $requete_flux_out->fetchAll();
          
     //On ecrit le contenue de la page
?>