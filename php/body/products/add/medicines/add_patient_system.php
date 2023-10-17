<?php

/*
======================================== CONNECT DNS PATIENTS SYSTEM ===================================================
*/
include_once("../../../../../php/dns/connect_patient_system.php");

    if($inpatients_Stork_Center ==0){
        $inpatients_Stork_Center_p=NULL;
    }else{$inpatients_Stork_Center_p= $inpatients_Stork_Center;}

    if($outpatients_general_Doctors ==0){
        $outpatients_general_Doctors_p=NULL;
    }else{$outpatients_general_Doctors_p=$outpatients_general_Doctors;}

    if($midmob==0){
        $midmob_p=NULL;
    }else{$midmob_p=$midmob;}

    if($detmob==0){
        $detmob_p=NULL;
    }else{$detmob_p=$detmob;}

    if($ambulance_2==0){
        $ambulance_2_p=NULL;
    }else{$ambulance_2_p=$ambulance_2;}

    if($outpatients_Yuck_Room==0){
        $outpatients_Yuck_Room_p=NULL;
    }else{$outpatients_Yuck_Room_p=$outpatients_Yuck_Room;}

    if($outpatients_Grace_Center==0){
        $outpatients_Grace_Center_p=NULL;
    }else{$outpatients_Grace_Center_p=$outpatients_Grace_Center;}

    
    if($outpatients_Joy_Center==0){
        $outpatients_Joy_Center_p=NULL;
    }else{$outpatients_Joy_Center_p=$outpatients_Joy_Center;}

    if($laboratory==0){
        $laboratory_p=NULL;
    }else{$laboratory_p=$laboratory;}

    if($outpatients_dental==0){
        $outpatients_dental_p=NULL;
    }else{$outpatients_dental_p=$outpatients_dental;}

    if($outpatients_obstetrical==0){
        $outpatients_obstetrical_p=NULL;
    }else{$outpatients_obstetrical_p=$outpatients_obstetrical;}

    if($outpatients_Ultrasound==0){
        $outpatients_Ultrasound_p=NULL;
    }else{$outpatients_Ultrasound_p=$outpatients_Ultrasound;}

    if($outpatients_Planning_Familial==0){
        $outpatients_Planning_Familial_p=NULL;
    }else{$outpatients_Planning_Familial_p=$outpatients_Planning_Familial;}

    if($outpatients_pediatric==0){
        $outpatients_pediatric_p=NULL;
    }else{$outpatients_pediatric_p=$outpatients_pediatric;}

    if($inpatients_pediatric_one==0){
        $inpatients_pediatric_one_p=NULL;
    }else{$inpatients_pediatric_one_p=$inpatients_pediatric_one;}

    if($inpatients_delivery==0){
        $inpatients_delivery_p=NULL;
    }else{$inpatients_delivery_p=$inpatients_delivery;}

    if($inpatients_surgeries==0){
        $inpatients_surgeries_p=NULL;
    }else{$inpatients_surgeries_p=$inpatients_surgeries;}
    
    if($sterilizations==0){
        $sterilizations_p=NULL;
    }else{$sterilizations_p=$sterilizations;} 

    $sql_patients_systems= "INSERT INTO `items` (`id`, `created_at`, `updated_at`, `barcode`, `code`, `description`, 
            `item_type_id`, `item_unit_id`, `location_id`, `administration_id`, `perUnit`, `price`, `status`, 
            `purpose_of_use`, `dci`, 
            `stork`, `glDoctor`, 
            `midMob`, `dentMob`, `ambulance`, `yuck_room`, 
            `graceCenter`, `joyCenter`, `laboratory`, 
            `dentDoctor`, `midPink`, `ultrasound`, `pf`, 
            `pediatric_out_patient`, `pediatric_in_patient`, `delivery`, `bloc`, `sterilisation`, 
            `deleted_at`, `id_med`, `id_cons_med`) 
    VALUES (NULL, current_timestamp(), current_timestamp(), NULL, '$id_code_med_patient_system', '$name', 
            1, '$form', '$location_0', '$application', '$med_quantity', '$med_price', NULL,
             '$classification', '$commercial_name', 
             '$inpatients_Stork_Center_p', '$outpatients_general_Doctors_p',
             '$midmob_p', '$detmob_p', '$ambulance_2_p', '$outpatients_Yuck_Room_p', 
             '$outpatients_Grace_Center_p', '$outpatients_Joy_Center_p',  '$laboratory_p', 
             '$outpatients_dental_p', '$outpatients_obstetrical_p', '$outpatients_Ultrasound_p', '$outpatients_Planning_Familial_p', 
             '$outpatients_pediatric_p', '$inpatients_pediatric_one_p', '$inpatients_delivery_p', '$inpatients_surgeries_p', 
             '$sterilizations_p', NULL, 
             '$medicine_id', '')";

      /*
         NULL,'$medicine_id', NULL)
    */
    //On prerare la requete
    $query_systems = $db_p->prepare($sql_patients_systems);
    //On execute la requete
    $query_systems->execute();

    //On recupere l'id de l'article
    $id_items = $db_p->lastInsertId();
?>