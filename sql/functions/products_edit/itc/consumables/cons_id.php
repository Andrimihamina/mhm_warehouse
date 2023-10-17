<?php
$sql_id= "UPDATE `cons_itc_id` SET 
    /*DESCRIPTIONS*/`Descriptions` = '$Descriptions', `brand_cons_itc` = '$brands'
    WHERE `cons_itc_id`.`id` = '$id'";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$cons_id = $db->lastInsertId();
?>