<?php
$sql= "UPDATE `mat_foo_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `mat_foo_aut_passive`.`id_mat_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>