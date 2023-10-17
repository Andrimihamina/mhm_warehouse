<?php
$sql_medicine_price= "UPDATE `medicine_price` SET 
`price_quantity` = '$qt_price', 
`box` = '$box', 
`box_name` = '$affiche_box', 
`price` = '$price' 
WHERE `medicine_price`.`id_med` = '$id'";
   
$query_medicine_price = $db->prepare($sql_medicine_price);
$query_medicine_price->execute(); 
?>