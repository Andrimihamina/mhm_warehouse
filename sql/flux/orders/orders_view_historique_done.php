<?php
require_once("../../env/dns_warehouse.php");

// VARIABLE TIMES
require_once("../../php/functions/temps.php");

$sql_orders = "SELECT * FROM `flux_out` WHERE
-- ID
`id_out` = '$id_out' 
-- 24 HOURS
AND `created_date` BETWEEN '$stt' AND CURRENT_TIMESTAMP 
-- NOT DONE WITH THE RESPONSABLE STORAGE
AND done_resp_storage = '1'
ORDER BY done_order DESC";
$requete_orders= $db->query($sql_orders);
$affiche_orders = $requete_orders->fetchall();
?>