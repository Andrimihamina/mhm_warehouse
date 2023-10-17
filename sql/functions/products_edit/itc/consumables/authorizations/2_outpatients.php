<?php
$sql= "UPDATE `cons_itc_aut_active` SET 
`outpatients_Joy_Center` = '$outpatients_Joy_Center', `outpatients_Emergency` = '$outpatients_Emergency', `outpatients_Grace_Center` = '$outpatients_Grace_Center', 
`outpatients_occupational_therapy` = '$outpatients_occupational_therapy', `outpatients_general_Doctors` = '$outpatients_general_Doctors', `outpatients_pediatric` = '$outpatients_pediatric',
`outpatients_dental` = '$outpatients_dental',`outpatients_dermathology` = '$outpatients_dermathology', `outpatients_Ultrasound` = '$outpatients_Ultrasound', 
`outpatients_obstetrical` = '$outpatients_obstetrical', `outpatients_Planning_Familial` = '$outpatients_Planning_Familial',`outpatients_Yuck_Room` = '$outpatients_Yuck_Room'
WHERE `cons_itc_aut_active`.`id_cons_itc` = '$id'"; 

$query = $db->prepare($sql);
$query->execute(); 
?>