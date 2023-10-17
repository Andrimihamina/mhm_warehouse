<?php
require_once("../../env/dns_warehouse.php");

// VARIABLE TIMES
require_once("../../php/functions/temps.php");

$sql_orders = "SELECT * FROM `flux_out` WHERE
-- ID
`id_out` = '$id_out' 
-- 24 HOURS
AND `created_date` BETWEEN '$stt' AND CURRENT_TIMESTAMP 
-- ACCORDING BY RESPONSIBLE ORDERS
AND done_order = '1' 
AND cancel ='0'
-- NOT DONE WITH THE RESPONSABLE STORAGE
AND done_resp_storage = '0'  
-- COUNT OFF DIFFERENTE TYPE";
$requete_orders= $db->query($sql_orders);
$affiche_orders = $requete_orders->fetchall()

?>