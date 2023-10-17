<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_cons_log_study= "SELECT * FROM `cons_log_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_cons_log_study = $db->query($sql_cons_log_study);
 
     //On recupere les donnes
     $products_cons_log_study= $requete_cons_log_study->fetchAll();
?>