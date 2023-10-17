<?php
// APPLICATION
$sql_used = "UPDATE `cons_tec_used` SET `used_for` = '$used_for' WHERE `cons_tec_used`.`id_cons_tec` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>