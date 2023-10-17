<?php
// APPLICATION
$sql_used = "UPDATE `cons_foo_used` SET `used_for` = '$used_for' WHERE `cons_foo_used`.`id_cons_foo` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>