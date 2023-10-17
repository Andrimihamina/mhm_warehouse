<?php
require_once("../../env/dns_warehouse.php");  

// VARIABLE TIMES
include ("../../php/functions/temps.php");

$sql_flux_out = "SELECT * FROM `flux_out` WHERE `done_order` = 0 AND `cancel` != 1 AND  `orderer`= '$UserName' AND `id_out`='$id_code_out' AND created_date BETWEEN '$stt' AND CURRENT_TIMESTAMP" ;

$requete_flux_out = $db->query($sql_flux_out);
$flux_out = $requete_flux_out ->fetchAll();
          
?>