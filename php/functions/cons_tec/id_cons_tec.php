<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_cons_tec_id= "SELECT * FROM `cons_tec_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_cons_tec_id = $db->query($sql_cons_tec_id);

     //On recupere les donnes
     $products_cons_tec_id= $requete_cons_tec_id->fetchAll();
?>