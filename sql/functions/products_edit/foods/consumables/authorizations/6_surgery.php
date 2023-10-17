<?php
$sql= "UPDATE `cons_foo_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `cons_foo_aut_active`.`id_cons_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>