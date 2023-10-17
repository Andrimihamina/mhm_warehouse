<?php
require_once("../../env/dns_warehouse.php");  
$sql_location = "SELECT * FROM `cos_location`  ORDER BY `location_descriptions` ASC";
$requete_location = $db->query($sql_location);
$details_settings = $requete_location->fetchAll();
?>