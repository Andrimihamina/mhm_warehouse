<?php
// APPLICATION
$sql_used = "INSERT INTO `cons_foo_used` (
    `id`, `id_cons_foo`, `used_for`) 
    VALUES (
    NULL, '$cons_id', '$Used');";

$query_used = $db->prepare($sql_used);
$query_used->execute();
?>