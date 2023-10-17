<?php
$sql= "UPDATE `medicine_authorizations_passive` SET  
      /*OPERATIONS*/
      `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry'
 WHERE `medicine_authorizations_passive`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>