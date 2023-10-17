<?php
$sql= "UPDATE `medicine_authorizations_passive` SET  
      /*BULDING INSIDE*/
      `bulding_inside_well_and_water` = '$bulding_inside_well_and_water', `bulding_inside_solar` = '$bulding_inside_solar', `bulding_inside_generator` = '$bulding_inside_generator', `bulding_inside_operation` = '$bulding_inside_operation', 
      `bulding_inside_equipement` = '$bulding_inside_equipement'
 WHERE `medicine_authorizations_passive`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>