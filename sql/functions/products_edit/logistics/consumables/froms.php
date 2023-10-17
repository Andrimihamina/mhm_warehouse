<?php
$sql_from= "UPDATE `cons_log_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `cons_log_from`.`id_cons_log` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>