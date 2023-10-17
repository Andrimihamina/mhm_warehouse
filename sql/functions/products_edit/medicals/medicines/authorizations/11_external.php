<?php
$sql= "UPDATE `medicine_authorizations_active` SET 
 `training_external_admin` ='$training_external_admin', `training_external_medical`='$training_external_medical', 
 `training_external_social` ='$training_external_social', `training_external_technical` ='$training_external_technical'
 WHERE `medicine_authorizations_active`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>