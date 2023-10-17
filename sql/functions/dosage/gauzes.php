<?php
require_once("../../env/dns_warehouse.php"); 
$sql_gauss = "SELECT * FROM `cons_gauss`  ORDER BY `gauss_descriptions` ASC";
$requete_gauss = $db->query($sql_gauss);
$details_settings  = $requete_gauss->fetchAll();
?>