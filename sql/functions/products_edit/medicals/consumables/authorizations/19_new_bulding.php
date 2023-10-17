<?php
$sql= "UPDATE `cons_med_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `cons_med_aut_temporary`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>