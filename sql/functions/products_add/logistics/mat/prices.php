<?php
$sql_price= "INSERT INTO `mat_log_price` 
(`id`, `id_mat_log`, `price_quantity`, `box`, `box_name`, `price`) 
VALUES 
(NULL, '$mat_id', '$qt_price', '$box', '$affiche_box', '$price')";
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>