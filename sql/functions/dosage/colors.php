<?php
require_once("../../env/dns_warehouse.php"); 
$sql_colors = "SELECT * FROM `cons_colors`  ORDER BY `colors_descriptions` ASC";
$requete_colors = $db->query($sql_colors);
$details_settings  = $requete_colors->fetchAll();
?>