<?php
$sql_from= "UPDATE `cons_med_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `cons_med_from`.`id_cons_med` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>