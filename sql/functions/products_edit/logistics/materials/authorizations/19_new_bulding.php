<?php
$sql= "UPDATE `mat_log_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `mat_log_aut_temporary`.`id_mat_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>