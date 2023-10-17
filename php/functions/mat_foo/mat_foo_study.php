<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_mat_foo_study= "SELECT * FROM `mat_foo_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_mat_foo_study = $db->query($sql_mat_foo_study);
 
     //On recupere les donnes
     $products_mat_foo_study= $requete_mat_foo_study->fetchAll();
?>