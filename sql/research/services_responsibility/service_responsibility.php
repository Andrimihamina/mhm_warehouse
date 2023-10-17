<?php
require_once("../../env/dns_warehouse.php");  
$sql = "SELECT * FROM `services` WHERE `id_service` = '$id_recherche'";
$requete = $db->query($sql);
$affiche = $requete ->fetchall();
$services_affiche =  $affiche[0]["services_descriptions"];
?>