<?php
// APPLICATION
$sql_used = "UPDATE `mat_itc_used` SET `used_for` = '$used_for' WHERE `mat_itc_used`.`id_mat_itc` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>