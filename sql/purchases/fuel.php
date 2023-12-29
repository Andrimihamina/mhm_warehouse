<?php
include_once ("../../env/dns_warehouse.php");

$sql_fuel= "INSERT INTO `fuel` 
    (`id`, `id_code`, `Date`, 
    `cards_number`, `available_balance`,`new_balance`, `ticket_number`, 
    `cars_number`, `types_fuel`, `purchase_capacity`, 
    `purchase_amout`, `ticket_picture`, `drivers`) VALUES 
    (NULL, '$id_code_in', '$date', 
    '$cards', '$available_balance', '$new_balance', '$ticket_number', 
    '$cars', '$types_fuel', '$purchase_capacity', 
    '$purchase_amount', '$file_name', '$name_adding');"; 

$query_fuel = $db->prepare($sql_fuel);
 
var_dump($query_fuel);

?>