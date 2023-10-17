<?php
$sql_medicine_from= "UPDATE `medicine_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `medicine_from`.`id_med` = '$id'"; 

$query_medicine_from = $db->prepare($sql_medicine_from);
$query_medicine_from->execute();
?>