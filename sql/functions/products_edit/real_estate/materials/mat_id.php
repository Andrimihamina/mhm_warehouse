<?php
$sql= "UPDATE `mat_imo_id` SET 
`Descriptions` = '$Descriptions', `name_check` = '$name_check', `model`  = '$model', 
`manufacturer_name` = '$brands', `sereal_number` = '$serealNumber'
WHERE `mat_imo_id`.`id` = '$id'";    

$query = $db->prepare($sql);
$query->execute();

$sql_check = "UPDATE `mat_imo_checking` SET 
    `states` = '$states', `manufacture_date` = '$manifDate', `last_check` = '$Check', 
    `routing_check` = '$IntControl', `routing_check_date` = '$IntControl'
WHERE `mat_imo_checking`.`id_mat_imo` = '$id' ";

$query_check = $db->prepare($sql_check);
$query_check ->execute();

?>