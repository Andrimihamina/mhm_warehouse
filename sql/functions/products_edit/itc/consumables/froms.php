<?php
$sql_from= "UPDATE `cons_itc_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `cons_itc_from`.`id_cons_itc` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>