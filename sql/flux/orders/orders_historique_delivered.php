<?php
require_once("../../env/dns_warehouse.php");

// VARIABLE TIMES
require_once("../../php/functions/temps.php");

$sql_orders_historique_delivered= "SELECT COUNT(id_out) AS number_out, id_out FROM flux_out 
                            -- CONDITION TIMES
                            WHERE `created_date` BETWEEN '$stt' AND CURRENT_TIMESTAMP 
                            -- ACCORDING BY RESPONSIBLE ORDERS
                            AND done_order = '1' 
                            AND cancel = '0' 
                            AND done_resp_storage = '1' 
                            -- USERS ORDER
                            AND ORDERER = '$UserName' 
                            -- COUNT OFF DIFFERENTE TYPE 
                            GROUP BY id_out HAVING COUNT(id_out) >= 1";

$requete_orders_historique_delivered= $db->query($sql_orders_historique_delivered);
$affiche_orders_delivered = $requete_orders_historique_delivered->fetchAll(); 

?>