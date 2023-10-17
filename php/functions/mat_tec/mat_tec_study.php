<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_mat_tec_study= "SELECT * FROM `mat_tec_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_mat_tec_study = $db->query($sql_mat_tec_study);
 
     //On recupere les donnes
     $products_mat_tec_study= $requete_mat_tec_study->fetchAll();
?>