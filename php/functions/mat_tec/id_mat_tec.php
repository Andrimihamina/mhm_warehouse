<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_mat_tec_id= "SELECT * FROM `mat_tec_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_mat_tec_id = $db->query($sql_mat_tec_id);

     //On recupere les donnes
     $products_mat_tec_id= $requete_mat_tec_id->fetchAll();
?>