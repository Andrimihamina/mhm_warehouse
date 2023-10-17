<?php
include_once("../../../../../php/dns/connect.php");
// VARIABLE TEMPS
$stt_maintenant = time();
$stt_maintenant = date( "Y/m/d H:i:s", $stt_maintenant );
$stt4 = strtotime('1 days ago');
$stt4 = date( "Y/m/d H:i:s", $stt4 );

//MEDICINE ID 

     $sql_recent_order= "SELECT COUNT(id_out) AS number_out, id_out FROM flux_out WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP AND done_order = '1' AND done_resp_storage = '0' AND `cancel`='0' GROUP BY id_out HAVING COUNT(id_out) >= 1";

     //On execute la requete
     $requete_recent_order = $db->query($sql_recent_order);

     //On recupere les donnes
     $products_recent_order = $requete_recent_order->fetchAll();
          
     //On ecrit le contenue de la page

//CONSUMMABLE MED ID 

     $sql_recent_order_cons_med= "SELECT COUNT(id_out) AS number_out, id_out FROM flux_out WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP AND done_order = '1' AND done_resp_storage = '0' AND `cancel`='0'  GROUP BY id_out HAVING COUNT(id_out) >= 1";

     //On execute la requete
     $requete_recent_order_cons_med = $db->query($sql_recent_order_cons_med);

     //On recupere les donnes
     $products_recent_order_cons_med = $requete_recent_order_cons_med->fetchAll();
          
     //On ecrit le contenue de la page

//FOR MEDICAL

$sql_recent_order_medical= "SELECT COUNT(id_out) AS number_out, id_out FROM flux_out WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP AND done_order = '1' AND done_resp_storage = '0' AND service_out = '1' AND `cancel`='0'  GROUP BY id_out HAVING COUNT(id_out) >= 1";

//On execute la requete
$requete_recent_order_medical = $db->query($sql_recent_order_medical);

//On recupere les donnes
$products_recent_order_medical = $requete_recent_order_medical->fetchAll();
     
//On ecrit le contenue de la page

//FOR TECHNICAL

$sql_recent_order_tech= "SELECT COUNT(id_out) AS number_out, id_out FROM flux_out WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP AND done_order = '1' AND done_resp_storage = '0' AND service_out = '2' AND `cancel`='0'  GROUP BY id_out HAVING COUNT(id_out) >= 1";

//On execute la requete
$requete_recent_order_tech = $db->query($sql_recent_order_tech);

//On recupere les donnes
$products_recent_order_tech = $requete_recent_order_tech->fetchAll();
     
//On ecrit le contenue de la page

//FOR LOGISTIC

$sql_recent_order_log= "SELECT COUNT(id_out) AS number_out, id_out FROM flux_out WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP AND  done_order = '1' AND done_resp_storage = '0' AND service_out = '3' AND `cancel`='0'  GROUP BY id_out HAVING COUNT(id_out) >= 1";

//On execute la requete
$requete_recent_order_log = $db->query($sql_recent_order_log);

//On recupere les donnes
$products_recent_order_log = $requete_recent_order_log->fetchAll();

//On ecrit le contenue de la page

?>