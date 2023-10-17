<?php
$sql= "UPDATE `mat_tec_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `mat_tec_aut_passive`.`id_mat_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>