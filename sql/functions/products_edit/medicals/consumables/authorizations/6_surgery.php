<?php
$sql= "UPDATE `cons_med_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `cons_med_aut_active`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>