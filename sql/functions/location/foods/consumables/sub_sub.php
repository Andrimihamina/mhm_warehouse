<?php
require_once("../../env/dns_warehouse.php"); 
$sql_subsublocation = "SELECT * FROM `cos_foo_subsublocation`  ORDER BY `subsublocation_descriptions` ASC";
$requete_subsublocation = $db->query($sql_subsublocation);
$details_settings = $requete_subsublocation->fetchAll();
?>