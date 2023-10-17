<?php
$sql= "UPDATE `mat_foo_aut_temporary` SET  
    `technical_storage` ='$technical_storage', `medical_storage`='$medical_storage', `no_medical_storage` ='$no_medical_storage'
 WHERE `mat_foo_aut_temporary`.`id_mat_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>