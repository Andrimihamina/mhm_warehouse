<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_cons_itc_study= "SELECT * FROM `cons_itc_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_cons_itc_study = $db->query($sql_cons_itc_study);
 
     //On recupere les donnes
     $products_cons_itc_study= $requete_cons_itc_study->fetchAll();
?>