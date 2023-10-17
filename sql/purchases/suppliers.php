<?php
include_once ("../../env/dns_warehouse.php");

$sql_suppliers = "SELECT * FROM `suppliers`  ORDER BY `sup_categories` ASC";
$requete_suppliers = $db->query($sql_suppliers);
$suppliers = $requete_suppliers->fetchAll();
?>