<?php
include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_medicine_id= "SELECT * FROM `medicine_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_medicine_id = $db->query($sql_medicine_id);

     //On recupere les donnes
     $products_medicine_id= $requete_medicine_id->fetchAll();
?> 