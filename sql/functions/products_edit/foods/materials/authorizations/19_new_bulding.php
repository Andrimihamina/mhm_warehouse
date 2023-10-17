<?php
$sql= "UPDATE `mat_foo_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `mat_foo_aut_temporary`.`id_mat_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>