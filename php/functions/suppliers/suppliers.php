<?php
include_once("../../../../../php/dns/connect.php");

    //SUPPLIERS
    $sql_suppliers = "SELECT * FROM `suppliers`  ORDER BY `sup_categories` ASC";

    //On execute la requete
    $requete_suppliers = $db->query($sql_suppliers);

    //On recupere les donnes
         $suppliers = $requete_suppliers->fetchAll();
?>