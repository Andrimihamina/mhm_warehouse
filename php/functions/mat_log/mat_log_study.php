<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_mat_log_study= "SELECT * FROM `mat_log_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_mat_log_study = $db->query($sql_mat_log_study);
 
     //On recupere les donnes
     $products_mat_log_study= $requete_mat_log_study->fetchAll();
?>