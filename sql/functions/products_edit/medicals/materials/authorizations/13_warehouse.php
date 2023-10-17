<?php
$sql= "UPDATE `mat_med_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `mat_med_aut_passive`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>