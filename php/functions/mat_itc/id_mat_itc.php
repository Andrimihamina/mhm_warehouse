<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_mat_itc_id= "SELECT * FROM `mat_itc_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_mat_itc_id = $db->query($sql_mat_itc_id);

     //On recupere les donnes
     $products_mat_itc_id= $requete_mat_itc_id->fetchAll();
?>