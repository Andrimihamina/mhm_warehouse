<?php
$sql_id= "UPDATE `cons_foo_id` SET 
    /*DESCRIPTIONS*/`Descriptions` = '$Descriptions', `brand_cons_foo` = '$brands'
    WHERE `cons_foo_id`.`id` = '$id'";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$cons_id = $db->lastInsertId();
?>