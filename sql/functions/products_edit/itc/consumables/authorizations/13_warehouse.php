<?php
$sql= "UPDATE `cons_itc_aut_passive` SET  
      /*WAREHOUSE*/
      `Warehouse` = '$Warehouse'
 WHERE `cons_itc_aut_passive`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>