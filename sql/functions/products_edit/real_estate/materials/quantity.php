<?php
$sql_quantity= "UPDATE `mat_imo_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `mat_imo_quantity`.`id_mat_imo` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>