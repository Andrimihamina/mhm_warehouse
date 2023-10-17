<?php
$sql_from= "UPDATE `mat_med_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `mat_med_from`.`id_mat_med` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>