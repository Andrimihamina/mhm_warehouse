<?php
// APPLICATION
$sql_used = "UPDATE `mat_imo_used` SET `used_for` = '$used_for' WHERE `mat_imo_used`.`id_mat_imo` = $id";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>