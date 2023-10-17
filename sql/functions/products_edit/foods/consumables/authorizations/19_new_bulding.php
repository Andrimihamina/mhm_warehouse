<?php
$sql= "UPDATE `cons_foo_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `cons_foo_aut_temporary`.`id_cons_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>