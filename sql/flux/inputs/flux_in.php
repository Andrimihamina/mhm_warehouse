<?php
require_once("../../env/dns_warehouse.php");  

// VARIABLE TIMES
include ("../../php/functions/temps.php");

$sql_flux_in = "SELECT * FROM `flux_in` WHERE `done` = 0 AND `cancel` != 1 AND created_date BETWEEN '$stt' AND CURRENT_TIMESTAMP";

$requete_flux_in = $db->query($sql_flux_in);
$flux_in = $requete_flux_in->fetchAll();
          
?>