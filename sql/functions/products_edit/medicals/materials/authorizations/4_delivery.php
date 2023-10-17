<?php
$sql= "UPDATE `mat_med_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `mat_med_aut_active`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>