<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_mat_med_study= "SELECT * FROM `mat_med_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_mat_med_study = $db->query($sql_mat_med_study);
 
     //On recupere les donnes
     $products_mat_med_study= $requete_mat_med_study->fetchAll();
?>