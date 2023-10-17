<?php
$sql= "UPDATE `mat_tec_aut_passive` SET  
      /*OPERATIONS*/
      `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry'
 WHERE `mat_tec_aut_passive`.`id_mat_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>