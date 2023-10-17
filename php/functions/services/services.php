<?php
include_once("../../../../../php/dns/connect.php");

     //RESPONSIBILITY
     $sql_services = "SELECT * FROM `services`  ORDER BY `services_definitions` ASC";

     //On execute la requete
     $requete_services = $db->query($sql_services);

     //On recupere les donnes
          $services = $requete_services->fetchAll();      
         //On ecrit le contenue de la page
?>