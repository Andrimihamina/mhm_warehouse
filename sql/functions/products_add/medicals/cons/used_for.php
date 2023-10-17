<?php
// APPLICATION
$sql_used = "INSERT INTO `cons_med_used` (
    `id`, `id_cons_med`, `used_for_cons_med`) 
    VALUES (
    NULL, '$cons_id', '$Used');";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>