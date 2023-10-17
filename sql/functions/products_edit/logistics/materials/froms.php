<?php
$sql_from= "UPDATE `mat_log_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `mat_log_from`.`id_mat_log` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>