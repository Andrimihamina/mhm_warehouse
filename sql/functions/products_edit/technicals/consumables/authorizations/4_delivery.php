<?php
$sql= "UPDATE `cons_tec_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `cons_tec_aut_active`.`id_cons_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>