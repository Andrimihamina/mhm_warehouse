<?php
require_once("../../env/dns_warehouse.php");  
$sql_services = "SELECT * FROM `services`  ORDER BY `id_service` ASC";
$requete_services = $db->query($sql_services);
$services = $requete_services->fetchAll();      
?>