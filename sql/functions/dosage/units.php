<?php
require_once("../../env/dns_warehouse.php"); 
$sql_units = "SELECT * FROM `med_units`  ORDER BY `units_description` ASC";
$requete_units = $db->query($sql_units);
$details_settings  = $requete_units->fetchAll();
?>