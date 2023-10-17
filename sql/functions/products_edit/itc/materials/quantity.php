<?php
$sql_quantity= "UPDATE `mat_itc_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `mat_itc_quantity`.`id_mat_itc` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>