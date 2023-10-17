<?php
$sql_price= "INSERT INTO `mat_tec_price` 
(`id`, `id_mat_tec`, `price_quantity`, `box`, `box_name`, `price`) 
VALUES 
(NULL, '$mat_id', '$qt_price', '$box', '$affiche_box', '$price')";
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>