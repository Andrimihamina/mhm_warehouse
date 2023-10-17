<?php
// APPLICATION
$sql_used = "INSERT INTO `mat_log_used` (
    `id`, `id_mat_log`, `used_for`) 
    VALUES (
    NULL, '$mat_id', '$Used')";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>