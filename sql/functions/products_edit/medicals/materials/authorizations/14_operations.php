<?php
$sql= "UPDATE `mat_med_aut_passive` SET  
      /*OPERATIONS*/
      `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry'
 WHERE `mat_med_aut_passive`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>