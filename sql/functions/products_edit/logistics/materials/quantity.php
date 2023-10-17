<?php
$sql_quantity= "UPDATE `mat_log_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `mat_log_quantity`.`id_mat_log` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>