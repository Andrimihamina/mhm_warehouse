<?php
$sql_quantity= "INSERT INTO `cons_itc_quantity` 
(`id`, `id_cons_itc`, 
`quantity_initial`, `quantity_minimal`, `quantity_avarage`, 
`stock`, `stock_in`, `stock_out`) 
VALUES 
(NULL,'$cons_id', 
'$quantity_initial', '$quantity_minimal', '$quantity_avarage',
'$quantity_initial', '$stock_in', '$stock_out')";

$query_quantity = $db->prepare($sql_quantity);
$query_quantity->execute();

?>