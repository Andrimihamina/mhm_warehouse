<?php
$sql= "UPDATE `cons_tec_aut_active` SET 
 `training_external_admin` ='$training_external_admin', `training_external_medical`='$training_external_medical', 
 `training_external_social` ='$training_external_social', `training_external_technical` ='$training_external_technical'
 WHERE `cons_tec_aut_active`.`id_cons_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>