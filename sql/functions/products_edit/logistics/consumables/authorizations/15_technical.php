<?php
$sql= "UPDATE `cons_log_aut_passive` SET  
      /*TECHNICAL*/
      `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical'
 WHERE `cons_log_aut_passive`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>