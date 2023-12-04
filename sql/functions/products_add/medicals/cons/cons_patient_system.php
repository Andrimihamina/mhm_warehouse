<?php
$id_code_cons_med_p = "C"."-". $ID_patient_system;

$sql_patients_systems= "INSERT INTO `items` (`id`, `created_at`, `updated_at`, `barcode`, `code`, `description`, `item_type_id`, `item_unit_id`,
 `location_id`, `administration_id`, `perUnit`, `price`, `status`, `purpose_of_use`, `dci`, `stork`, `glDoctor`, `midMob`, `dentMob`, `ambulance`, `yuck_room`, `graceCenter`, `joyCenter`, `laboratory`, `dentDoctor`, `midPink`, `ultrasound`, `pf`, `pediatric_out_patient`, `pediatric_in_patient`, `delivery`, `bloc`, `sterilisation`, `deleted_at`,`id_med`,`id_cons_med`) VALUES  
(NULL, current_timestamp(), current_timestamp(), NULL, '$id_code_cons_med_p', '$Descriptions', '2', NULL, 
'$location_0', NULL, '$qt_price', '$price', NULL, '$Used', '$brands', 
/*AUT*/
'$inpatients_Stork_Center', '$outpatients_general_Doctors', '$midmob', '$detmob', 
'$ambulance_2', '$outpatients_Yuck_Room', '$outpatients_Grace_Center', '$outpatients_Joy_Center', '$laboratory', '$outpatients_dental', '$outpatients_obstetrical', '$outpatients_Ultrasound', '$outpatients_Planning_Familial', '$outpatients_pediatric', '$inpatients_pediatric_one', '$inpatients_delivery', '$inpatients_surgeries', '$sterilizations', NULL,NULL, '$cons_id')";

//On prerare la requete
$query_systems = $db_p ->prepare($sql_patients_systems);
//On execute la requete
$query_systems->execute();

//On recupere l'id de l'article
$id_items = $db_p->lastInsertId();
?>