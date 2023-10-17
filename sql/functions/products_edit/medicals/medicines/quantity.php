<?php
$sql= "UPDATE `medicine_quantity` SET 
`quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' 
WHERE `medicine_quantity`.`id_med` = '$id'";
   
$query = $db->prepare($sql);
$query ->execute(); 

?>