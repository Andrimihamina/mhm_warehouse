<?php
$sql= "UPDATE `cons_tec_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `cons_tec_aut_active`.`id_cons_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>