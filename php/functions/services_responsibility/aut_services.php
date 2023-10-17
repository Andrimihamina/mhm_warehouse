<?php
include_once("../../dns/connect.php");

     //RESPONSIBILITY
     $sql = "SELECT * FROM `service_responsibility`  ORDER BY `id_service` ASC";

     //On execute la requete
     $requete_services_resp = $db->query($sql);

     //On recupere les donnes
          $services_resp = $requete_services_resp->fetchAll();      
         //On ecrit le contenue de la page
?>