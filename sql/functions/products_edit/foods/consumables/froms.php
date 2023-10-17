<?php
$sql_from= "UPDATE `cons_foo_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' 
WHERE `cons_foo_from`.`id_cons_foo` = '$id'"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>