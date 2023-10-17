<?php
$sql_quantity= "UPDATE `cons_itc_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `cons_itc_quantity`.`id_cons_itc` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>