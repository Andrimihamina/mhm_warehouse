<?php
$sql_checking= "INSERT INTO `mat_itc_checking` (
    `id`, `created_date`, `id_mat_itc`, `states`, `manufacture_date`, `last_check`, `routing_check`, `routing_check_date`) 
    VALUES (
    NULL, current_timestamp(), '$mat_id', '$states', '$manifDate', '$Check', '$IntControl', '')";
   
$query_checking = $db->prepare($sql_checking);
$query_checking->execute();
?>