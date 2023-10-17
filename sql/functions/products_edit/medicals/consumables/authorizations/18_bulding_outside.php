<?php
$sql= "UPDATE `cons_med_aut_passive` SET  
      /*BULDING OUTSIDE*/
      `bulding_outside_technical` = '$bulding_outside_technical', `bulding_outside_canteen` = '$bulding_outside_canteen', `bulding_outside_yard` = '$bulding_outside_yard', 
      `bulding_outside_villa_kb` = '$bulding_outside_villa_kb', `bulding_outside_security` = '$bulding_outside_security'
 WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>