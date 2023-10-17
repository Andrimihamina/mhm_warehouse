<?php
$sql_medicine_from= "INSERT INTO `medicine_from` 
(`id`, `id_med`,  `germany`,`madagaskar`) 
VALUES 
(NULL, '$medicine_id',  '$froms_germany','$froms_madagaskar')"; 

$query_medicine_from = $db->prepare($sql_medicine_from);
$query_medicine_from->execute();
?>