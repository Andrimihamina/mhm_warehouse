<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_cons_log_id= "SELECT * FROM `cons_log_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_cons_log_id = $db->query($sql_cons_log_id);

     //On recupere les donnes
     $products_cons_log_id= $requete_cons_log_id->fetchAll();
?>