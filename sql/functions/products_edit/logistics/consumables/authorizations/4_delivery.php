<?php
$sql= "UPDATE `cons_log_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `cons_log_aut_active`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>