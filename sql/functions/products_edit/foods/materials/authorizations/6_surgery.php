<?php
$sql= "UPDATE `mat_foo_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `mat_foo_aut_active`.`id_mat_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>