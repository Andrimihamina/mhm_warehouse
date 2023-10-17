<?php
$sql_from= "INSERT INTO `mat_log_from` 
(`id`, `id_mat_log`,  `germany`,`madagaskar`) 
VALUES 
(NULL, '$mat_id',  '$froms_germany','$froms_madagaskar')"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>