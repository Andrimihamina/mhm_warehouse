<?php
$sql= "UPDATE `mat_med_aut_temporary` SET  
    `technical_storage` ='$technical_storage', `medical_storage`='$medical_storage', `no_medical_storage` ='$no_medical_storage'
 WHERE `mat_med_aut_temporary`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>