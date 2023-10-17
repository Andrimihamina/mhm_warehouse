<?php
$sql_from= "UPDATE `mat_itc_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `mat_itc_from`.`id_mat_itc` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>