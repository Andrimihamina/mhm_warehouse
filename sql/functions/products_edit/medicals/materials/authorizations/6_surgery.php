<?php
$sql= "UPDATE `mat_med_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `mat_med_aut_active`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>