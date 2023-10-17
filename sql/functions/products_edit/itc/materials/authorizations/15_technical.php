<?php
$sql= "UPDATE `mat_itc_aut_passive` SET  
      /*TECHNICAL*/
      `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical'
 WHERE `mat_itc_aut_passive`.`id_mat_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>