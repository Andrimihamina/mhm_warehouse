<?php
$sql_quantity= "UPDATE `cons_log_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `cons_log_quantity`.`id_cons_log` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>