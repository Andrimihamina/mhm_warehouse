<?php
$sql_quantity= "UPDATE `cons_med_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `cons_med_quantity`.`id_cons_med` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>