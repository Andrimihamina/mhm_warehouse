<?php
$sql= "UPDATE `cons_med_aut_passive` SET  
      /*TECHNICAL*/
      `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical'
 WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>