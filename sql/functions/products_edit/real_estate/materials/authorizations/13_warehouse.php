<?php
$sql= "UPDATE `mat_imo_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `mat_imo_aut_passive`.`id_mat_imo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>