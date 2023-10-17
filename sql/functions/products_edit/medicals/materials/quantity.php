<?php
$sql_quantity= "UPDATE `mat_med_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `mat_med_quantity`.`id_mat_med` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>