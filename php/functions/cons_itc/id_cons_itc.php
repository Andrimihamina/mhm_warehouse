<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_cons_itc_id= "SELECT * FROM `cons_itc_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_cons_itc_id = $db->query($sql_cons_itc_id);

     //On recupere les donnes
     $products_cons_itc_id= $requete_cons_itc_id->fetchAll();
?>