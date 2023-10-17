<?php
$sql= "UPDATE `medicine_authorizations_passive` SET  
      /*VEHICLE*/
      `vehicles_isuzu_bleu` = '$vehicles_isuzu_bleu', `vehicles_isuzu_green` = '$vehicles_isuzu_green', `vehicles_galopper` = '$vehicles_galopper', `vehicles_daihatsu` = '$vehicles_daihatsu', 
      `vehicles_prado` = '$vehicles_prado', `vehicles_starex` = '$vehicles_starex', `vehicles_sprinter`='$vehicles_sprinter' ,`vehicles_motorbike_honda` = '$vehicles_motorbike_honda', `vehicles_scooter_bleu` = '$vehicles_scooter_bleu', `vehicles_others` ='$vehicles_others'
 WHERE `medicine_authorizations_passive`.`id_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>