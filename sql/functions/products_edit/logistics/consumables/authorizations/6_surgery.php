<?php
$sql= "UPDATE `cons_log_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `cons_log_aut_active`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>