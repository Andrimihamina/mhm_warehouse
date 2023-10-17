<?php
// APPLICATION
$sql_used = "UPDATE `mat_log_used` SET `used_for` = '$used_for' WHERE `mat_log_used`.`id_mat_log` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>