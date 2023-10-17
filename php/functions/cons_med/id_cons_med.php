<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_cons_med_id= "SELECT * FROM `cons_med_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_cons_med_id = $db->query($sql_cons_med_id);

     //On recupere les donnes
     $products_cons_med_id= $requete_cons_med_id->fetchAll();
?>