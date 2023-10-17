<?php
require_once("../../env/dns_warehouse.php"); 
$sql_sizes = "SELECT * FROM `cons_sizes`  ORDER BY `sizes_descriptions` ASC";
$requete_sizes = $db->query($sql_sizes);
$details_settings  = $requete_sizes->fetchAll();
?>