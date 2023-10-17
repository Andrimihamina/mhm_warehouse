<?php
/*
======================================== CONNECT DNS PATIENTS SYSTEM ===================================================
*/
if($inpatients_Stork_Center==0){
    $inpatients_Stork_Center_p="NULL";
}else{$inpatients_Stork_Center_p=$inpatients_Stork_Center;}

if($outpatients_general_Doctors==0){
    $outpatients_general_Doctors_p="NULL";
}else{$outpatients_general_Doctors_p=$outpatients_general_Doctors;}

if($midmob==0){
    $midmob_p="NULL";
}else{$midmob_p=$midmob;}

if($detmob==0){
    $detmob_p="NULL";
}else{$detmob_p=$detmob;}

if($ambulance_2==0){
    $ambulance_2_p="NULL";
}else{$ambulance_2_p=$ambulance_2;}

if($outpatients_Yuck_Room==0){
    $outpatients_Yuck_Room_p="NULL";
}else{$outpatients_Yuck_Room_p=$outpatients_Yuck_Room;}

if($outpatients_Grace_Center==0){
    $outpatients_Grace_Center_p="NULL";
}else{$outpatients_Grace_Center_p=$outpatients_Grace_Center;}


if($outpatients_Joy_Center==0){
    $outpatients_Joy_Center_p="NULL";
}else{$outpatients_Joy_Center_p=$outpatients_Joy_Center;}

if($laboratory==0){
    $laboratory_p="NULL";
}else{$laboratory_p=$laboratory;}

if($outpatients_dental==0){
    $outpatients_dental_p="NULL";
}else{$outpatients_dental_p=$outpatients_dental;}

if($outpatients_obstetrical==0){
    $outpatients_obstetrical_p="NULL";
}else{$outpatients_obstetrical_p=$outpatients_obstetrical;}

if($outpatients_Ultrasound==0){
    $outpatients_Ultrasound_p="NULL";
}else{$outpatients_Ultrasound_p=$outpatients_Ultrasound;}

if($outpatients_Planning_Familial==0){
    $outpatients_Planning_Familial_p="NULL";
}else{$outpatients_Planning_Familial_p=$outpatients_Planning_Familial;}

if($outpatients_pediatric==0){
    $outpatients_pediatric_p="NULL";
}else{$outpatients_pediatric_p=$outpatients_pediatric;}

if($inpatients_pediatric_one==0){
    $inpatients_pediatric_one_p="NULL";
}else{$inpatients_pediatric_one_p=$inpatients_pediatric_one;}

if($inpatients_delivery==0){
    $inpatients_delivery_p="NULL";
}else{$inpatients_delivery_p=$inpatients_delivery;}

if($inpatients_surgeries==0){
    $inpatients_surgeries_p="NULL";
}else{$inpatients_surgeries_p=$inpatients_surgeries;}

if($sterilizations==0){
    $sterilizations_p="NULL";
}else{$sterilizations_p=$sterilizations;}

$sql_patients_systems_inventory= "INSERT INTO `inventories` (`id`, `created_at`, `updated_at`, `item_id`, `general`, `graceCenter`, `stork`, `bloc`, `midPink`, `pediatric`, `anesthetist`, `ambulance`, `glDoctor`, `dentDoctor`, `midMob`, `dentMob`, `glMob`, `office`, `houseHold`, `joyCenter`, `technical`, `id_med`, `id_cons_med`) VALUES 
    (NULL, current_timestamp(), current_timestamp(), '$id_items', '$quantity_initial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,'$medicine_id','')";
    // On prerare la requete
$query_systems_inventory = $db_p ->prepare($sql_patients_systems_inventory);
    //On execute la requete
$query_systems_inventory->execute();
   
?>