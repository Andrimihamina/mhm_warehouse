<?php
$sql= "UPDATE `cons_itc_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `cons_itc_aut_active`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>