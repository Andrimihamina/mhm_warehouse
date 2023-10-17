<?php
$sql= "UPDATE `medicine_authorizations_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `medicine_authorizations_active`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>