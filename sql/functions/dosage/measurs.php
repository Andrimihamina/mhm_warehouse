<?php
require_once("../../env/dns_warehouse.php"); 
$sql_measurs = "SELECT * FROM `cons_measurs`  ORDER BY `measurs_descriptions` ASC";
$requete_measurs = $db->query($sql_measurs);
$details_settings  = $requete_measurs->fetchAll();
?>