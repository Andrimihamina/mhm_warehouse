<?php
$sql_from= "UPDATE `mat_foo_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `mat_foo_from`.`id_mat_foo` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>