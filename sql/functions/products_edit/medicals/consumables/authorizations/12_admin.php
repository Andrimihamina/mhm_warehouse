<?php
$sql= "UPDATE `cons_med_aut_passive` SET 
/*ADMIN*/
`admin_admin` = '$admin_admin', `admin_logistic` = '$admin_logistic', 
`admin_finance`= '$admin_finance', `admin_it` = '$admin_it', `admin_qm` = '$admin_qm', `admin_communication` = '$admin_communication', `HR` = '$HR'
 WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>