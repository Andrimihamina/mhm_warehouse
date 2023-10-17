<?php
// APPLICATION
$sql_used = "UPDATE `cons_med_used` SET `used_for_cons_med` = '$used_for' WHERE `cons_med_used`.`id_cons_med` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>