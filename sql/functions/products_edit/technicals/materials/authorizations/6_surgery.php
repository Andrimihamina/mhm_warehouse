<?php
$sql= "UPDATE `mat_tec_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `mat_tec_aut_active`.`id_mat_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>