<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_mat_log_id= "SELECT * FROM `mat_log_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_mat_log_id = $db->query($sql_mat_log_id);

     //On recupere les donnes
     $products_mat_log_id= $requete_mat_log_id->fetchAll();
?>