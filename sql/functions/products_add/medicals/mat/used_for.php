<?php
// APPLICATION
$sql_used = "INSERT INTO `mat_med_used` (
    `id`, `id_mat_med`, `used_for_mat_med`) 
    VALUES (
    NULL, '$mat_id', '$Used');";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>