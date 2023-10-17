<?php
$sql= "UPDATE `mat_tec_aut_passive` SET  
      /*TECHNICAL*/
      `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical'
 WHERE `mat_tec_aut_passive`.`id_mat_tec` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>