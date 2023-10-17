<?php
$sql= "UPDATE `mat_tec_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `mat_tec_aut_active`.`id_mat_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>