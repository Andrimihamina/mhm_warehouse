<?php
$sql_quantity= "INSERT INTO `mat_med_quantity` 
(`id`, `id_mat_med`, 
`quantity_initial`, `quantity_minimal`, `quantity_avarage`, 
`stock`, `stock_in`, `stock_out`) 
VALUES 
(NULL,'$mat_id', 
'$quantity_initial', '$quantity_minimal', '$quantity_avarage',
'$quantity_initial', '$stock_in', '$stock_out')";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>