<?php
$sql_price= "UPDATE `mat_tec_price` SET 
`price_quantity` = '$qt_price', 
`box` = '$box', 
`box_name` = '$affiche_box', 
`price` = '$price' 
WHERE `mat_tec_price`.`id_mat_tec` = '$id'";
   
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>