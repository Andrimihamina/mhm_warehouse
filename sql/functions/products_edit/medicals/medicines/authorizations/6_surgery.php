<?php
$sql= "UPDATE `medicine_authorizations_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `medicine_authorizations_active`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>