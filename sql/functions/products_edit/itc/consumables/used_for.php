<?php
// APPLICATION
$sql_used = "UPDATE `cons_itc_used` SET `used_for` = '$used_for' WHERE `cons_itc_used`.`id_cons_itc` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>