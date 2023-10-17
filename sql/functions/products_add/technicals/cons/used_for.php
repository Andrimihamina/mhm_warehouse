<?php
// APPLICATION
$sql_used = "INSERT INTO `cons_tec_used` (
    `id`, `id_cons_tec`, `used_for`) 
    VALUES (
    NULL, '$cons_id', '$Used');";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>