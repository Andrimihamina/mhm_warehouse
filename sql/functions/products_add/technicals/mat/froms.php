<?php
$sql_from= "INSERT INTO `mat_tec_from` 
(`id`, `id_mat_tec`,  `germany`,`madagaskar`) 
VALUES 
(NULL, '$mat_id',  '$froms_germany','$froms_madagaskar')"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>