<?php
$sql_price= "UPDATE `cons_med_price` SET 
`price_quantity` = '$qt_price', 
`box` = '$box', 
`box_name` = '$affiche_box', 
`price` = '$price' 
WHERE `cons_med_price`.`id_cons_med` = '$id'";
   
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>