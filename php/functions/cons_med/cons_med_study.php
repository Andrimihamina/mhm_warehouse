<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_cons_med_study= "SELECT * FROM `cons_med_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_cons_med_study = $db->query($sql_cons_med_study);
 
     //On recupere les donnes
     $products_cons_med_study= $requete_cons_med_study->fetchAll();
?>