<?php
$sql= "UPDATE `cons_med_aut_passive` SET  
      /*OPERATIONS*/
      `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry'
 WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>