<?php
// APPLICATION
$sql_used = "UPDATE `mat_foo_used` SET `used_for` = '$used_for' WHERE `mat_foo_used`.`id_mat_foo` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>