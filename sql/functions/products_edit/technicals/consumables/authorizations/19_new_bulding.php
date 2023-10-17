<?php
$sql= "UPDATE `cons_tec_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `cons_tec_aut_temporary`.`id_cons_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>