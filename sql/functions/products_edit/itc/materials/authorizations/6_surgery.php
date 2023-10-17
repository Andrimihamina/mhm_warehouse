<?php
$sql= "UPDATE `mat_itc_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `mat_itc_aut_active`.`id_mat_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>