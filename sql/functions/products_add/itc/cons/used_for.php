<?php
// APPLICATION
$sql_used = "INSERT INTO `cons_itc_used` (
    `id`, `id_cons_itc`, `used_for`) 
    VALUES (
    NULL, '$cons_id', '$Used');";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>