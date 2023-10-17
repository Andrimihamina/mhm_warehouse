<?php
$sql_from= "UPDATE `cons_tec_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `cons_tec_from`.`id_cons_tec` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>