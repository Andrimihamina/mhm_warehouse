<?php
$sql= "UPDATE `cons_log_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `cons_log_aut_temporary`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>