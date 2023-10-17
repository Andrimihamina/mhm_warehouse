<?php
$sql= "UPDATE `mat_tec_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `mat_tec_aut_temporary`.`id_mat_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>