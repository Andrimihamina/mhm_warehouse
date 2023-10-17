<?php
$sql= "UPDATE `cons_log_aut_passive` SET  
      /*BULDING INSIDE*/
      `bulding_inside_well_and_water` = '$bulding_inside_well_and_water', `bulding_inside_solar` = '$bulding_inside_solar', `bulding_inside_generator` = '$bulding_inside_generator', `bulding_inside_operation` = '$bulding_inside_operation', 
      `bulding_inside_equipement` = '$bulding_inside_equipement'
 WHERE `cons_log_aut_passive`.`id_cons_log` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>