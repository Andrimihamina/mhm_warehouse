<?php
include_once("../../../../../php/dns/connect.php");

     //RESPONSIBILITY
     $sql_resp = "SELECT * FROM `mhm_resp`  ORDER BY `id_resp` ASC";

     //On execute la requete
     $requete_resp = $db->query($sql_resp);

     //On recupere les donnes
          $responsibilities = $requete_resp->fetchAll();      
         //On ecrit le contenue de la page
?>