<?php
require_once("../../env/dns_warehouse.php"); 
$sql_subsublocation = "SELECT * FROM `mat_subsublocation_foo`  ORDER BY `subsublocation_descriptions` ASC";
$requete_subsublocation = $db->query($sql_subsublocation);
$details_settings = $requete_subsublocation->fetchAll();
?>