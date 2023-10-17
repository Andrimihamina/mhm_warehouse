<?php
$sql= "UPDATE `mat_imo_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `mat_imo_aut_temporary`.`id_mat_imo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>