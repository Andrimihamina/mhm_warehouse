<?php
$sql_from= "INSERT INTO `cons_itc_from` 
(`id`, `id_cons_itc`,  `germany`,`madagaskar`) 
VALUES 
(NULL, '$cons_id',  '$froms_germany','$froms_madagaskar')"; 

$query_from = $db->prepare($sql_from);
$query_from->execute();
?>