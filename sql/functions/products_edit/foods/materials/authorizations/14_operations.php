<?php
$sql= "UPDATE `mat_foo_aut_passive` SET  
      /*OPERATIONS*/
      `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry'
 WHERE `mat_foo_aut_passive`.`id_mat_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>