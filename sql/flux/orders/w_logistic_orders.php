<?php
require_once("../../env/dns_warehouse.php");

// VARIABLE TIMES
require_once("../../php/functions/temps.php");

$sql_all_orders = "SELECT COUNT(id_out) AS number_out, id_out 
                         FROM flux_out 
                         -- CONDITION TIMES
                         WHERE `created_date` BETWEEN '$stt' AND CURRENT_TIMESTAMP 
                         -- ACCORDING BY RESPONSIBLE ORDERS
                         AND done_order = '1' 
                         AND cancel ='0'
                         -- NOT DONE WITH THE RESPONSABLE STORAGE
                         AND done_resp_storage = '0'  
                         -- SERVICE OUTPUTS
                         AND service_out = '2'  OR service_out = '6'
                         -- COUNT OFF DIFFERENTE TYPE
                         GROUP BY id_out HAVING COUNT(id_out) >= 1 ";

$requete_all_orders = $db->query($sql_all_orders);
$all_orders = $requete_all_orders->fetchAll(); 

?>