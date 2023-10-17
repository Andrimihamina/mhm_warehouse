<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_mat_itc_study= "SELECT * FROM `mat_itc_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_mat_itc_study = $db->query($sql_mat_itc_study);
 
     //On recupere les donnes
     $products_mat_itc_study= $requete_mat_itc_study->fetchAll();
?>