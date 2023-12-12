<?php
        /*
                ============= INSERTION AUTORIZATION ACTIVE =======================
        */
        $sql_authorization_active = "INSERT INTO `cons_foo_aut_active` 
        (`id`, `id_cons_foo`,
        /*Mobil Medical*/
        `ulm`, `midmob`, `detmob`, `ambulance_1`, `ambulance_2`, `outreaches_with_parteners`, 
        /*Outpatient*/
        `outpatients_Joy_Center`, `outpatients_Emergency`, `outpatients_Grace_Center`, 
        `outpatients_occupational_therapy`, `outpatients_general_Doctors`, `outpatients_pediatric`, `outpatients_dental`,
        `outpatients_dermathology`, `outpatients_Ultrasound`, `outpatients_obstetrical`, `outpatients_Planning_Familial`,
        `outpatients_Yuck_Room`,
        /*steerilization and laboratory*/
        `sterilizations`, `laboratory`,
        /*delivery*/
        `inpatients_delivery`,
        /*inpatients*/
        `inpatients_Baby_Room`, `inpatients_Stork_Center`, `inpatients_Neonatal_Intensive`, `inpatients_Neonatal_Kangaroo`, `inpatients_pediatric_one`, 
        /*surgeries*/
        `inpatients_surgeries`, 
        /*External medical service*/
        `o_therapy`, `german_docs`, `eye`, `external_dermathology`, `external_others`, 
        /*Sponsorships*/
        `sponsorships_medical_support`, `sponsorships_milk_program`, `sponsorships_familles`, `sponsorships_mhm_staff_kids`, 
        `sponsorships_healthy_foods`, `sponsorships_mhm_staff_familles`, `sponsorships_preganancies`, 
        `sponsorships_kids`, `sponsorships_school`, 
        /*Social*/
        `social_chaplincy`, `social_kids_club`, `social_playmobil`, `social_prayer`, `social_sensibilizations`, 
        /*training*/
        `training_internal_admin`, `training_internal_medical`, `training_internal_social`, `training_internal_technical`, 
        `training_external_admin`, `training_external_medical`, `training_external_social`, `training_external_technical`) 
        VALUES 
        (NULL, '$cons_id',
         /*Mobil Medical*/
         '$ulm', '$midmob', '$detmob', '$ambulance_1', '$ambulance_1', '$outreaches_with_parteners', 
        /*Outpatient*/
        '$outpatients_Joy_Center', '$outpatients_Emergency', '$outpatients_Grace_Center', 
        '$outpatients_occupational_therapy', '$outpatients_general_Doctors', '$outpatients_pediatric', '$outpatients_dental',
        '$outpatients_dermathology', '$outpatients_Ultrasound', '$outpatients_obstetrical', '$outpatients_Planning_Familial',
        '$outpatients_Yuck_Room',
        /*steerilization and laboratory*/
        '$sterilizations', '$laboratory',
        /*delivery*/
        '$inpatients_delivery', 
        /*inpatients*/
        '$inpatients_Baby_Room', '$inpatients_Stork_Center', '$inpatients_Neonatal_Intensive', '$inpatients_Neonatal_Kangaroo', '$inpatients_pediatric_one', 
        /*surgeries*/
        '$inpatients_surgeries',
        /*External medical service*/
        '$o_therapy', '$german_docs', '$eye', '$external_dermathology', '$external_others', 
        /*Sponsorships*/
        '$sponsorships_medical_support', '$sponsorships_milk_program', '$sponsorships_familles', '$sponsorships_mhm_staff_kids', 
        '$sponsorships_healthy_foods', '$sponsorships_mhm_staff_familles', '$sponsorships_preganancies', 
        '$sponsorships_kids', '$sponsorships_school', 
        /*Social*/
        '$social_chaplincy', '$social_kids_club', '$social_playmobil', '$social_prayer', '$social_sensibilizations', 
        /*training*/
        '$training_internal_admin', '$training_internal_medical', '$training_internal_social', '$training_internal_technical', 
        '$training_external_admin', '$training_external_medical', '$training_external_social', '$training_external_technical')";
        
        //On prerare la requete
        $query_authorization_active= $db->prepare($sql_authorization_active);
        //On execute la requete

       $query_authorization_active->execute();
       /*
       =================== AUTORIZATION PASSIVE ===============================
       */
      $sql_authorization_passive = "INSERT INTO `cons_foo_aut_passive` 
      (`id`, `id_cons_foo`, 
      /*ADMIN*/
      `admin_admin`, `admin_logistic`, `admin_finance`, `admin_it`, `admin_qm`, `admin_communication`, 
      /*STAFF*/
      `HR`, 
      /*WAREHOUSE*/
      `Warehouse`, 
      /*OPERATIONS*/
      `Operation_Cleaning`, `Operation_Cooking`, `Operation_Laundry`,
      /*TECHNICAL*/
      `technical_technical`, `technical_Biomed`, `technical_Mechanical`,
      /*VEHICLE*/
      `vehicles_isuzu_bleu`, `vehicles_isuzu_green`, `vehicles_galopper`, `vehicles_daihatsu`, 
      `vehicles_prado`, `vehicles_starex`, `vehicles_sprinter`,  `vehicles_motorbike_honda`, `vehicles_scooter_bleu`, `vehicles_others`,
      /*BULDING INSIDE*/
      `bulding_inside_well_and_water`, `bulding_inside_solar`, `bulding_inside_generator`, `bulding_inside_operation`, 
      `bulding_inside_equipement`, 
      /*BULDING OUTSIDE*/
      `bulding_outside_technical`, `bulding_outside_canteen`, `bulding_outside_yard`, 
      `bulding_outside_villa_kb`, `bulding_outside_security`) 
      VALUES 
      (NULL, '$cons_id',
        /*ADMIN*/
        '$admin_admin', '$admin_logistic', '$admin_finance', '$admin_it', '$admin_qm', '$admin_communication', 
      /*STAFF*/
      '$HR', 
      /*WAREHOUSE*/
      '$Warehouse',
      /*OPERATIONS*/
      '$Operation_Cleaning', '$Operation_Cooking', '$Operation_Laundry',
      /*TECHNICAL*/
      '$technical_technical', '$technical_Biomed', '$technical_Mechanical',
      /*VEHICLE*/
      '$vehicles_isuzu_bleu', '$vehicles_isuzu_green', '$vehicles_galopper', '$vehicles_daihatsu', 
      '$vehicles_prado', '$vehicles_starex', '$vehicles_sprinter', '$vehicles_motorbike_honda', '$vehicles_scooter_bleu', '$vehicles_others',
      /*BULDING INSIDE*/
      '$bulding_inside_well_and_water', '$bulding_inside_solar', '$bulding_inside_generator', '$bulding_inside_operation', 
      '$bulding_inside_equipement', 
      /*BULDING OUTSIDE*/
      '$bulding_outside_technical', '$bulding_outside_canteen', '$bulding_outside_yard', 
      '$bulding_outside_villa_kb', '$bulding_outside_security')";

      //On prerare la requete
      $query_authorization_passive= $db->prepare($sql_authorization_passive);
      //On execute la requete

     $query_authorization_passive->execute();
     /*
                =====================0 AUTORIZATION TEMPORARY ========================
     */
    $sql_authorization_temporary = "INSERT INTO `cons_foo_aut_temporary` 
    (`id`, `id_cons_foo`, 
    `new_bulding`, 
    `technical_storage`, `medical_storage`, `no_medical_storage`) 
    VALUES 
    (NULL, '$cons_id',
    '$new_bulding', 
    '$technical_storage', '$medical_storage', '$no_medical_storage')";

    //On prerare la requete
    $query_authorization_temporary= $db->prepare($sql_authorization_temporary);
    //On execute la requete

   $query_authorization_temporary->execute();
   
?>