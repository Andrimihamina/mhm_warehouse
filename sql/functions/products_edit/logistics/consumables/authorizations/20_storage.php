<?php
$sql= "UPDATE `cons_log_aut_temporary` SET  
    `technical_storage` ='$technical_storage', `medical_storage`='$medical_storage', `no_medical_storage` ='$no_medical_storage'
 WHERE `cons_log_aut_temporary`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>