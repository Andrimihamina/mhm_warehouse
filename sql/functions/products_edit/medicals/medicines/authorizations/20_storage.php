<?php
$sql= "UPDATE `medicine_authorizations_temporary` SET  
    `technical_storage` ='$technical_storage', `medical_storage`='$medical_storage', `no_medical_storage` ='$no_medical_storage'
 WHERE `medicine_authorizations_temporary`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>