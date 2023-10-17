<?php
$sql= "UPDATE `medicine_authorizations_passive` SET  
      /*BULDING OUTSIDE*/
      `bulding_outside_technical` = '$bulding_outside_technical', `bulding_outside_canteen` = '$bulding_outside_canteen', `bulding_outside_yard` = '$bulding_outside_yard', 
      `bulding_outside_villa_kb` = '$bulding_outside_villa_kb', `bulding_outside_security` = '$bulding_outside_security'
 WHERE `medicine_authorizations_passive`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>