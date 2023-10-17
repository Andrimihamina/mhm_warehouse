<?php
$sql_from= "INSERT INTO `mat_med_from` 
(`id`, `id_mat_med`,  `germany`,`madagaskar`) 
VALUES 
(NULL, '$mat_id',  '$froms_germany','$froms_madagaskar')"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>