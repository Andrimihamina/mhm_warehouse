<?php
require_once("../../env/dns_warehouse.php");  
$sql_class = "SELECT * FROM `med_classification`  ORDER BY `classifications_descriptions` ASC";
$requete_class = $db->query($sql_class);
$details_settings = $requete_class->fetchAll();

?>