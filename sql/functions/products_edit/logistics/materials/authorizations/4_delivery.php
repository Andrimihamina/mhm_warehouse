<?php
$sql= "UPDATE `mat_log_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `mat_log_aut_active`.`id_mat_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>