<?php
$sql= "UPDATE `mat_log_aut_active` SET 
`inpatients_Baby_Room` ='$inpatients_Baby_Room', `inpatients_Stork_Center`='$inpatients_Stork_Center', 
`inpatients_Neonatal_Intensive` ='$inpatients_Neonatal_Intensive', `inpatients_Neonatal_Kangaroo` ='$inpatients_Neonatal_Kangaroo', 
`inpatients_pediatric_one` ='$inpatients_pediatric_one'
WHERE `mat_log_aut_active`.`id_mat_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>