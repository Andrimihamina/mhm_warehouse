<?php
$sql_medicine_quantity= "INSERT INTO `medicine_quantity` 
(`id`, `id_med`, 
`quantity_initial`, `quantity_minimal`, `quantity_avarage`, 
`stock`, `stock_in`, `stock_out`) 
VALUES 
(NULL,'$medicine_id', 
'$quantity_initial', '$quantity_minimal', '$quantity_avarage',
'$quantity_initial', '$stock_in', '$stock_out')";

$query_medicine_quantity = $db->prepare($sql_medicine_quantity);
$query_medicine_quantity->execute();

?>