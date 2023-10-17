<?php
$sql= "UPDATE `mat_itc_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `mat_itc_aut_active`.`id_mat_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>