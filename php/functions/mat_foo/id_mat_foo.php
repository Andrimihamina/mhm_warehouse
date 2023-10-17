<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_mat_foo_id= "SELECT * FROM `mat_foo_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_mat_foo_id = $db->query($sql_mat_foo_id);

     //On recupere les donnes
     $products_mat_foo_id= $requete_mat_foo_id->fetchAll();
?>