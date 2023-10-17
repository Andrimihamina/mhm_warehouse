<?php
$sql= "UPDATE `mat_imo_aut_active` SET 
 `training_internal_admin` ='$training_internal_admin', `training_internal_medical` ='$training_internal_medical', 
 `training_internal_social` ='$training_internal_social', `training_internal_technical` ='$training_internal_technical'
 WHERE `mat_imo_aut_active`.`id_mat_imo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>