<?php
$sql= "UPDATE `mat_foo_aut_passive` SET  
      /*TECHNICAL*/
      `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical'
 WHERE `mat_foo_aut_passive`.`id_mat_foo` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>