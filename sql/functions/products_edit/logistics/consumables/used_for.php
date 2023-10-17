<?php
// APPLICATION
$sql_used = "UPDATE `cons_log_used` SET `used_for` = '$used_for' WHERE `cons_log_used`.`id_cons_log` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>