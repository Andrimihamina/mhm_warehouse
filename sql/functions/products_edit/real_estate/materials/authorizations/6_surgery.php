<?php
$sql= "UPDATE `mat_imo_aut_active` SET 
`inpatients_surgeries` ='$inpatients_surgeries' WHERE `mat_imo_aut_active`.`id_mat_imo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>