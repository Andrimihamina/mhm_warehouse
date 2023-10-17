<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_mat_imo_id= "SELECT * FROM `mat_imo_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_mat_imo_id = $db->query($sql_mat_imo_id);

     //On recupere les donnes
     $products_mat_imo_id= $requete_mat_imo_id->fetchAll();
?>