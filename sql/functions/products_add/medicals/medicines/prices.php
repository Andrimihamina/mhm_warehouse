<?php
$sql_medicine_price= "INSERT INTO `medicine_price` 
(`id`, `id_med`, `price_quantity`, `box`, `box_name`, `price`) 
VALUES 
(NULL, '$medicine_id', '$qt_price', '$box', '$affiche_box', '$price')";
   
$query_medicine_price = $db->prepare($sql_medicine_price);
$query_medicine_price->execute();
?>