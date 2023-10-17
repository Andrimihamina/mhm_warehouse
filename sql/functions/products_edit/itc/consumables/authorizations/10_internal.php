<?php
$sql= "UPDATE `cons_itc_aut_active` SET 
 `training_internal_admin` ='$training_internal_admin', `training_internal_medical` ='$training_internal_medical', 
 `training_internal_social` ='$training_internal_social', `training_internal_technical` ='$training_internal_technical'
 WHERE `cons_itc_aut_active`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>