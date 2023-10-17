<?php
$sql= "UPDATE `cons_med_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `cons_med_aut_active`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>