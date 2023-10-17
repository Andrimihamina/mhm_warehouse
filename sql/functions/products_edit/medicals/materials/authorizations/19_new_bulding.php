<?php
$sql= "UPDATE `mat_med_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `mat_med_aut_temporary`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>