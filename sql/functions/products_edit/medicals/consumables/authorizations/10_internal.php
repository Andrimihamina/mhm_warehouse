<?php
$sql= "UPDATE `cons_med_aut_active` SET 
 `training_internal_admin` ='$training_internal_admin', `training_internal_medical` ='$training_internal_medical', 
 `training_internal_social` ='$training_internal_social', `training_internal_technical` ='$training_internal_technical'
 WHERE `cons_med_aut_active`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>