<?php
$sql= "UPDATE `cons_med_aut_active` SET 
`sponsorships_medical_support` = '$sponsorships_medical_support', `sponsorships_milk_program`= '$sponsorships_milk_program', 
`sponsorships_familles` = '$sponsorships_familles', `sponsorships_mhm_staff_kids` = '$sponsorships_mhm_staff_kids', 
`sponsorships_healthy_foods` = '$sponsorships_healthy_foods', `sponsorships_mhm_staff_familles` = '$sponsorships_mhm_staff_familles', 
`sponsorships_preganancies` = '$sponsorships_preganancies', `sponsorships_kids` = '$sponsorships_kids', 
`sponsorships_school` = '$sponsorships_school'
 WHERE `cons_med_aut_active`.`id_cons_med` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>