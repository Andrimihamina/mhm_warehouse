<?php
$sql= "UPDATE `cons_tec_aut_temporary` SET  
    `technical_storage` ='$technical_storage', `medical_storage`='$medical_storage', `no_medical_storage` ='$no_medical_storage'
 WHERE `cons_tec_aut_temporary`.`id_cons_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>