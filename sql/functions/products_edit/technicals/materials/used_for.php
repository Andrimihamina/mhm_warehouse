<?php
// APPLICATION
$sql_used = "UPDATE `mat_tec_used` SET `used_for` = '$used_for' WHERE `mat_tec_used`.`id_mat_tec` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>