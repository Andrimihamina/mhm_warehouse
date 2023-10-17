<?php
$sql= "UPDATE `medicine_authorizations_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `medicine_authorizations_temporary`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>