<?php
$sql= "UPDATE `mat_med_aut_passive` SET  
      /*BULDING OUTSIDE*/
      `bulding_outside_technical` = '$bulding_outside_technical', `bulding_outside_canteen` = '$bulding_outside_canteen', `bulding_outside_yard` = '$bulding_outside_yard', 
      `bulding_outside_villa_kb` = '$bulding_outside_villa_kb', `bulding_outside_security` = '$bulding_outside_security'
 WHERE `mat_med_aut_passive`.`id_mat_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>