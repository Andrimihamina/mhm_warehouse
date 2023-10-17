<?php
$sql= "UPDATE `medicine_authorizations_passive` SET 
/*ADMIN*/
`admin_admin` = '$admin_admin', `admin_logistic` = '$admin_logistic', 
`admin_finance`= '$admin_finance', `admin_it` = '$admin_it', `admin_qm` = '$admin_qm', `admin_communication` = '$admin_communication', `HR` = '$HR'
 WHERE `medicine_authorizations_passive`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>