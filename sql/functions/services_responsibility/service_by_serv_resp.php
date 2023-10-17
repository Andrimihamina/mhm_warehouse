<?php
require_once("../../env/dns_warehouse.php");  
$sql = "SELECT * FROM `services`  ORDER BY `id_service` ASC";
$requete_services_resp = $db->query($sql);
$services_resp = $requete_services_resp->fetchAll();         
?>