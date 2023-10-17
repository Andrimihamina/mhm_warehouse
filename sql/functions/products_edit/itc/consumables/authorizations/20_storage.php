<?php
$sql= "UPDATE `cons_itc_aut_temporary` SET  
    `technical_storage` ='$technical_storage', `medical_storage`='$medical_storage', `no_medical_storage` ='$no_medical_storage'
 WHERE `cons_itc_aut_temporary`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>