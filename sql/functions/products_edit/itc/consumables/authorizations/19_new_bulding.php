<?php
$sql= "UPDATE `cons_itc_aut_temporary` SET  
      `new_bulding` = '$new_bulding'
 WHERE `cons_itc_aut_temporary`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>