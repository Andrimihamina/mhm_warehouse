<?php
$sql_price= "UPDATE `mat_imo_price` SET 
`price_quantity` = '$qt_price', 
`box` = '$box', 
`box_name` = '$affiche_box', 
`price` = '$price' 
WHERE `mat_imo_price`.`id_mat_imo` = '$id'";
   
   
$query_price = $db->prepare($sql_price);
$query_price->execute();
?>