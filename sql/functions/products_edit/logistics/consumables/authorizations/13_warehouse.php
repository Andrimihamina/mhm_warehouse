<?php
$sql= "UPDATE `cons_log_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `cons_log_aut_passive`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>