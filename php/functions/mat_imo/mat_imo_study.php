<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_mat_imo_study= "SELECT * FROM `mat_imo_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_mat_imo_study = $db->query($sql_mat_imo_study);
 
     //On recupere les donnes
     $products_mat_imo_study= $requete_mat_imo_study->fetchAll();
?>