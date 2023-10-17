<?php
$sql= "UPDATE `mat_med_aut_active` SET 
 `training_external_admin` ='$training_external_admin', `training_external_medical`='$training_external_medical', 
 `training_external_social` ='$training_external_social', `training_external_technical` ='$training_external_technical'
 WHERE `mat_med_aut_active`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>