<?php
$sql_price= "UPDATE `cons_foo_price` SET 
`price_quantity` = '$qt_price', 
`box` = '$box', 
`box_name` = '$affiche_box', 
`price` = '$price' 
WHERE `cons_foo_price`.`id_cons_foo` = '$id'";
   
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>