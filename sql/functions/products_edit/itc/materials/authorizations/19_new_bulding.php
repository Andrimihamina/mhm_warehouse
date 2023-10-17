<?php
$sql= "UPDATE `mat_itc_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `mat_itc_aut_temporary`.`id_mat_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>