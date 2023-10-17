<?php
$sql= "UPDATE `cons_foo_aut_passive` SET  
      /*OPERATIONS*/
      `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry'
 WHERE `cons_foo_aut_passive`.`id_cons_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>