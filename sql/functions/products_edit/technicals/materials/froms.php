<?php
$sql_from= "UPDATE `mat_tec_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `mat_tec_from`.`id_mat_tec` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>