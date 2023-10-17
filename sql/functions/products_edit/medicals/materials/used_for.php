<?php
// APPLICATION
$sql_used = "UPDATE `mat_med_used` SET `used_for_mat_med` = '$used_for' WHERE `mat_med_used`.`id_mat_med` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>