<?php
$sql= "UPDATE `mat_log_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `mat_log_aut_passive`.`id_mat_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>