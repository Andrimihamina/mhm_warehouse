<?php
$sql= "UPDATE `mat_itc_aut_active` SET 
 `training_internal_admin` ='$training_internal_admin', `training_internal_medical` ='$training_internal_medical', 
 `training_internal_social` ='$training_internal_social', `training_internal_technical` ='$training_internal_technical'
 WHERE `mat_itc_aut_active`.`id_mat_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>