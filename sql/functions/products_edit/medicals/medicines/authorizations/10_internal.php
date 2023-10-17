<?php
$sql= "UPDATE `medicine_authorizations_active` SET 
 `training_internal_admin` ='$training_internal_admin', `training_internal_medical` ='$training_internal_medical', 
 `training_internal_social` ='$training_internal_social', `training_internal_technical` ='$training_internal_technical'
 WHERE `medicine_authorizations_active`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>