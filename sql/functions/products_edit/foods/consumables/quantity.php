<?php
$sql_quantity= "UPDATE `cons_foo_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `cons_foo_quantity`.`id_cons_foo` = '$id'";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>