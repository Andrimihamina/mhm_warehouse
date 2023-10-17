<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_cons_foo_study= "SELECT * FROM `cons_foo_quantity`  WHERE `stock` < `quantity_minimal`";

     //On execute la requete
     $requete_cons_foo_study = $db->query($sql_cons_foo_study);
 
     //On recupere les donnes
     $products_cons_foo_study= $requete_cons_foo_study->fetchAll();
?>