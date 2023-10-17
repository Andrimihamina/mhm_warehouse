<?php
$sql_from= "UPDATE `mat_imo_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `mat_imo_from`.`id_mat_imo` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>