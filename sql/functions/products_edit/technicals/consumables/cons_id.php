<?php
$sql_id= "UPDATE `cons_tec_id` SET 
    /*DESCRIPTIONS*/`Descriptions` = '$Descriptions', `brand_cons_tec` = '$brands'
    WHERE `cons_tec_id`.`id` = '$id'";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$cons_id = $db->lastInsertId();
?>