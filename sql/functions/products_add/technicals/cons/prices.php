<?php
$sql_price= "INSERT INTO `cons_tec_price` 
(`id`, `id_cons_tec`, `price_quantity`, `box`, `box_name`, `price`) 
VALUES 
(NULL, '$cons_id', '$qt_price', '$box', '$affiche_box', '$price')";
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>