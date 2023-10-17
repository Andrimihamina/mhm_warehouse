<?php
$sql_id= "UPDATE `cons_log_id` SET 
    /*DESCRIPTIONS*/`Descriptions` = '$Descriptions', `brand_cons_log` = '$brands'
    WHERE `cons_log_id`.`id` = '$id'";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$cons_id = $db->lastInsertId();
?>