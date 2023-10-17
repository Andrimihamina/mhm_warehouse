<?php
$sql= "UPDATE `cons_itc_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `cons_itc_aut_active`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>