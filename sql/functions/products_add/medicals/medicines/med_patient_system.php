<?php
$sql_items = "INSERT INTO `items` 
(`id`, `created_at`, `updated_at`, `barcode`, 
`code`, `description`, `item_type_id`, 
`item_unit_id`, 
`location_id`, 
`administration_id`, 
`perUnit`, `price`, 
`status`, `purpose_of_use`, 
`dci`, 
`stork`, `glDoctor`, 
`midMob`, `dentMob`, `ambulance`, `yuck_room`, `graceCenter`, 
`joyCenter`, `laboratory`, `dentDoctor`, 
`midPink`, `ultrasound`, `pf`, 
`pediatric_out_patient`, `pediatric_in_patient`, 
`delivery`, `bloc`, `sterilisation`, 
`deleted_at`, 
`id_med`, `id_cons_med`) VALUES 
(NULL, current_timestamp(), current_timestamp(), NULL, 
'$ID_patient_system', '$Descriptions', 1, 
$form, 
1, 
'$application', 
NULL, NULL, 
NULL, '$classification', 
'$commercial_name', 
$inpatients_Stork_Center, $outpatients_general_Doctors, 
$midmob, $detmob, $ambulance_1, $outpatients_Yuck_Room, $outpatients_Grace_Center, 
$outpatients_Joy_Center, $laboratory, $outpatients_dental, 
$outpatients_obstetrical, $outpatients_Ultrasound, $outpatients_Planning_Familial, 
$outpatients_pediatric, $inpatients_pediatric_one, 
$inpatients_delivery, $inpatients_surgeries, $sterilizations, 
0, 
'$medicine_id', '')";
var_dump($sql_items);
$query_items = $db_p->prepare($sql_items);
$query_items->execute();
$medicine_items = $db_p->lastInsertId();
//On recupere l'id de l'article
$id_items = $db_p->lastInsertId();
?>