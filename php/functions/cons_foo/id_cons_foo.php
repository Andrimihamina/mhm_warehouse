<?php
include_once("../../../../../php/dns/connect.php");

    //CONS MED ID
     $sql_cons_foo_id= "SELECT * FROM `cons_foo_id`  ORDER BY `Descriptions` ASC";

     //On execute la requete
     $requete_cons_foo_id = $db->query($sql_cons_foo_id);

     //On recupere les donnes
     $products_cons_foo_id= $requete_cons_foo_id->fetchAll();
?>