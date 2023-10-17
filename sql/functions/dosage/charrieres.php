<?php
require_once("../../env/dns_warehouse.php"); 
$sql_charrieres = "SELECT * FROM `cons_charrieres`  ORDER BY `charrieres_descriptions` ASC";
$requete_charrieres = $db->query($sql_charrieres);
$details_settings  = $requete_charrieres->fetchAll();
?>