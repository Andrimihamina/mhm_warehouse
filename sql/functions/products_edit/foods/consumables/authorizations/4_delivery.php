<?php
$sql= "UPDATE `cons_foo_aut_active` SET 
  `inpatients_delivery`='$inpatients_delivery'
WHERE `cons_foo_aut_active`.`id_cons_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>