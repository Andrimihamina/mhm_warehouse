<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_cons_tec_study= "SELECT * FROM `cons_tec_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_cons_tec_study = $db->query($sql_cons_tec_study);
 
     //On recupere les donnes
     $products_cons_tec_study= $requete_cons_tec_study->fetchAll();
?>