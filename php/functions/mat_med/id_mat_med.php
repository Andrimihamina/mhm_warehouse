<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_mat_med_id= "SELECT * FROM `mat_med_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_mat_med_id = $db->query($sql_mat_med_id);

     //On recupere les donnes
     $products_mat_med_id= $requete_mat_med_id->fetchAll();
?>