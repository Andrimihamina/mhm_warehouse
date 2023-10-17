<?php
$sql= "UPDATE `medicine_authorizations_passive` SET  
      /*TECHNICAL*/
      `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical'
 WHERE `medicine_authorizations_passive`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>