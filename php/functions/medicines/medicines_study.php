<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_medicine_study= "SELECT * FROM `medicine_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_medicine_study = $db->query($sql_medicine_study);
 
     //On recupere les donnes
     $products_medicine_study= $requete_medicine_study->fetchAll();
?>