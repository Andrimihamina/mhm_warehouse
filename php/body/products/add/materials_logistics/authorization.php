<?php
/*
======================== ACTIVE =============================
*/
/*
======================== MOBILE MEDICAL =============================
*/
//ULM
        $ulm = isSet($_POST['ulm']) ? 1 : 0;
//MIDMOB
        $midmob = isSet($_POST['midmob']) ? 1 : 0;
//DETMOB
        $detmob = isSet($_POST['detmob']) ? 1 : 0;
//AMBULANCE 1
        $ambulance_1 = isSet($_POST['ambulance_1']) ? 1 : 0;
//AMBULANCE 2
        $ambulance_2 = isSet($_POST['ambulance_2']) ? 1 : 0;
//OUTREACHES WITH PARTENERS
        $outreaches_with_parteners = isSet($_POST['outreaches_with_parteners']) ? 1 : 0;

/*
========================  MEDICAL =============================
*/
/*
========================  OUTPATIENTS =============================
*/
//JOY CENTER
        $outpatients_Joy_Center = isSet($_POST['outpatients_Joy_Center']) ? 1 : 0;
//EMERGENCY
        $outpatients_Emergency = isSet($_POST['outpatients_Emergency']) ? 1 : 0;
//GRACE CENTER
        $outpatients_Grace_Center = isSet($_POST['outpatients_Grace_Center']) ? 1 : 0;
//OCCUPATIONAL THERAPY
        $outpatients_occupational_therapy = isSet($_POST['outpatients_occupational_therapy']) ? 1 : 0;
//GENERAL DOCTORS
        $outpatients_general_Doctors = isSet($_POST['outpatients_general_Doctors']) ? 1 : 0;
//PEDIATRIC
        $outpatients_pediatric = isSet($_POST['outpatients_pediatric']) ? 1 : 0;
//DENTAL
        $outpatients_dental = isSet($_POST['outpatients_dental']) ? 1 : 0;
//DERMATHOLOGY
        $outpatients_dermathology = isSet($_POST['outpatients_dermathology']) ? 1 : 0;
//ULTRASOUND
        $outpatients_Ultrasound = isSet($_POST['outpatients_Ultrasound']) ? 1 : 0;
//OBSTETRICAL
        $outpatients_obstetrical = isSet($_POST['outpatients_obstetrical']) ? 1 : 0;
//PLANNING FAMILIAL
        $outpatients_Planning_Familial = isSet($_POST['outpatients_Planning_Familial']) ? 1 : 0;
//YUCK ROOM
        $outpatients_Yuck_Room = isSet($_POST['outpatients_Yuck_Room']) ? 1 : 0;
/*
========================  STERILIZATION AND LABORATORY =============================
*/
//STERILIZATIONS
        $sterilizations = isSet($_POST['sterilizations']) ? 1 : 0;
//LABORATORY
        $laboratory = isSet($_POST['laboratory']) ? 1 : 0;
/*
========================  INPATIENTS OBSTETRICAL =============================
*/
//DELIVERY
        $inpatients_delivery = isSet($_POST['inpatients_delivery']) ? 1 : 0;

/*
========================  INPATIENTS =============================
*/
//BABY ROOM
        $inpatients_Baby_Room = isSet($_POST['inpatients_Baby_Room']) ? 1 : 0;
//STORK CENTER
        $inpatients_Stork_Center = isSet($_POST['inpatients_Stork_Center']) ? 1 : 0;
//NEONATAL INTENSIVE CARE
        $inpatients_Neonatal_Intensive = isSet($_POST['inpatients_Neonatal_Intensive']) ? 1 : 0;
//NEONATAL KANGOROO CARE
        $inpatients_Neonatal_Kangaroo = isSet($_POST['inpatients_Neonatal_Kangaroo']) ? 1 : 0;
//PEDIATRIC ONE
        $inpatients_pediatric_one = isSet($_POST['inpatients_pediatric_one']) ? 1 : 0;
/*
========================  INPATIENTS SURGERIES =============================
*/
//GENERAL
        $inpatients_surgeries = isSet($_POST['inpatients_surgeries']) ? 1 : 0;
/*
========================  EXTERNAL MEDICAL SERVICE =============================
*/
//O THERAPY
        $o_therapy = isSet($_POST['o_therapy']) ? 1 : 0;
//GERMAN DOCS
        $german_docs = isSet($_POST['german_docs']) ? 1 : 0;
//EYE
        $eye = isSet($_POST['eye']) ? 1 : 0;
//EXTERNAL DERMATHOLOGY
        $external_dermathology = isSet($_POST['external_dermathology']) ? 1 : 0;
//OTHERS
        $external_others = isSet($_POST['external_others']) ? 1 : 0;

/*
========================  SPONSORSHIPS =============================
*/
//MEDICAL SUPPORT
        $sponsorships_medical_support = isSet($_POST['sponsorships_medical_support']) ? 1 : 0;
//MILK PROGRAM
        $sponsorships_milk_program = isSet($_POST['sponsorships_milk_program']) ? 1 : 0;
//FAMILLES
        $sponsorships_familles = isSet($_POST['sponsorships_familles']) ? 1 : 0;
//MHM STAFF KIDS
        $sponsorships_mhm_staff_kids = isSet($_POST['sponsorships_mhm_staff_kids']) ? 1 : 0;
//HEALTHY FOODS
        $sponsorships_healthy_foods = isSet($_POST['sponsorships_healthy_foods']) ? 1 : 0;
//MHM STAFF FAMILLES
        $sponsorships_mhm_staff_familles = isSet($_POST['sponsorships_mhm_staff_familles']) ? 1 : 0;
//PREGNANCIES
        $sponsorships_preganancies = isSet($_POST['sponsorships_preganancies']) ? 1 : 0;
//KIDS
        $sponsorships_kids = isSet($_POST['sponsorships_kids']) ? 1 : 0;
//SCHOOL
        $sponsorships_school = isSet($_POST['sponsorships_school']) ? 1 : 0;
/*
========================  SOCIAL AFFAIRE MINISTRY =============================
*/
//CHAPLINCY
        $social_chaplincy = isSet($_POST['social_chaplincy']) ? 1 : 0;
//KIDS CLUBS
        $social_kids_club = isSet($_POST['social_kids_club']) ? 1 : 0;
//PLAYMOBIL
        $social_playmobil = isSet($_POST['social_playmobil']) ? 1 : 0;
//PRAYER WORKSHIP ALPHA COURS
        $social_prayer = isSet($_POST['social_prayer']) ? 1 : 0;
//SENSIBILIZATIONS
        $social_sensibilizations = isSet($_POST['social_sensibilizations']) ? 1 : 0;
/*
========================  TRAINING AND TEACHING =============================
*/
/*
========================  INTERNAL =============================
*/
//ADMIN
        $training_internal_admin = isSet($_POST['training_internal_admin']) ? 1 : 0;
//MEDICAL
        $training_internal_medical = isSet($_POST['training_internal_medical']) ? 1 : 0;
//SOCIAL
        $training_internal_social = isSet($_POST['training_internal_social']) ? 1 : 0;
//TECHNICAL
        $training_internal_technical = isSet($_POST['training_internal_technical']) ? 1 : 0;
/*
========================  EXTERNAL =============================
*/
//ADMIN
        $training_external_admin = isSet($_POST['training_external_admin']) ? 1 : 0;
//MEDICAL
        $training_external_medical = isSet($_POST['training_external_medical']) ? 1 : 0;
//SOCIAL
        $training_external_social = isSet($_POST['training_external_social']) ? 1 : 0;
//TECHNICAL
        $training_external_technical = isSet($_POST['training_external_technical']) ? 1 : 0;
/*
========================  PASSIVE =============================
*/
/*
========================  ADMIN =============================
*/
//ADMIN
        $admin_admin = isSet($_POST['admin_admin']) ? 1 : 0;
//LOGISTIC
        $admin_logistic = isSet($_POST['admin_logistic']) ? 1 : 0;
//FINANCE
        $admin_finance = isSet($_POST['admin_finance']) ? 1 : 0;
//IT
        $admin_it = isSet($_POST['admin_it']) ? 1 : 0;
//QM
        $admin_qm = isSet($_POST['admin_qm']) ? 1 : 0;
//COMMUNICATION
        $admin_communication = isSet($_POST['admin_communication']) ? 1 : 0;

/*
        ========================  STAFF =============================
*/
//HR
        $HR = isSet($_POST['HR']) ? 1 : 0;
/*
========================  WAEREHOUSE =============================
*/
        $Warehouse = isSet($_POST['Warehouse']) ? 1 : 0;
/*
========================  OPERATIONS =============================
*/
        $Operation_Cleaning = isSet($_POST['Operation_Cleaning']) ? 1 : 0;
        $Operation_Cooking = isSet($_POST['Operation_Cooking']) ? 1 : 0;
        $Operation_Laundry = isSet($_POST['Operation_Laundry']) ? 1 : 0;
/*
========================  TECHNICAL =============================
*/
        $technical_technical = isSet($_POST['technical_technical']) ? 1 : 0;
        $technical_Biomed = isSet($_POST['technical_Biomed']) ? 1 : 0;
        $technical_Mechanical = isSet($_POST['technical_Mechanical']) ? 1 : 0;
/*
========================  VEHICLES =============================
*/
//ISUZU BLUE
        $vehicles_isuzu_bleu = isSet($_POST['vehicles_isuzu_bleu']) ? 1 : 0;
//ISUZU GREEN
        $vehicles_isuzu_green = isSet($_POST['vehicles_isuzu_green']) ? 1 : 0;
//GALOPPER
        $vehicles_galopper = isSet($_POST['vehicles_galopper']) ? 1 : 0;
//DAIHATSU
        $vehicles_daihatsu = isSet($_POST['vehicles_daihatsu']) ? 1 : 0;
//PRADO
        $vehicles_prado = isSet($_POST['vehicles_prado']) ? 1 : 0;
//STAREX
        $vehicles_starex = isSet($_POST['vehicles_starex']) ? 1 : 0;
//STAREX
        $vehicles_sprinter = isSet($_POST['vehicles_sprinter']) ? 1 : 0;
//MOTORBIKE HONDA
        $vehicles_motorbike_honda = isSet($_POST['vehicles_motorbike_honda']) ? 1 : 0;
//SCOOTER BLEU
        $vehicles_scooter_bleu = isSet($_POST['vehicles_scooter_bleu']) ? 1 : 0;
//SCOOTER BLEU
        $vehicles_others = isSet($_POST['vehicles_others']) ? 1 : 0;

/*
========================  BULDING INSIDE =============================
*/
//WELL AND WATER
        $bulding_inside_well_and_water = isSet($_POST['bulding_inside_well_and_water']) ? 1 : 0;
//SOLAR PANEL AND ELECTRICITY
        $bulding_inside_solar = isSet($_POST['bulding_inside_solar']) ? 1 : 0;
//GENERATOR AND ELECTRICITY
        $bulding_inside_generator = isSet($_POST['bulding_inside_generator']) ? 1 : 0;
//OPERATION
        $bulding_inside_operation = isSet($_POST['bulding_inside_operation']) ? 1 : 0;
//EUIPMENT
        $bulding_inside_equipement = isSet($_POST['bulding_inside_equipement']) ? 1 : 0;
/*
========================  BULDING OUTSIDE =============================
*/
//TECHNICAL SITE
        $bulding_outside_technical = isSet($_POST['bulding_outside_technical']) ? 1 : 0;
//CANTEEN
        $bulding_outside_canteen = isSet($_POST['bulding_outside_canteen']) ? 1 : 0;
//YARD
        $bulding_outside_yard = isSet($_POST['bulding_outside_yard']) ? 1 : 0;
//VILLA KB
        $bulding_outside_villa_kb = isSet($_POST['bulding_outside_villa_kb']) ? 1 : 0;
//SECURITY
        $bulding_outside_security = isSet($_POST['bulding_outside_security']) ? 1 : 0;
/*
========================  TEMPORARY =============================
*/
//NEW BULDING
        $new_bulding = isSet($_POST['new_bulding']) ? 1 : 0;
//TECHNICAL STORAGE
        $technical_storage = isSet($_POST['technical_storage']) ? 1 : 0;
//MEDICAL STORAGE
        $medical_storage = isSet($_POST['medical_storage']) ? 1 : 0;
//NO MEDICAL STORAGE
        $no_medical_storage = isSet($_POST['no_medical_storage']) ? 1 : 0;

        /*
                ============= INSERTION AUTORIZATION ACTIVE =======================
        */
        $sql_authorization_active = "INSERT INTO `mat_log_aut_active` 
        (`id`, `id_mat_log`, 
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
        (NULL, '$mat_log_id', 
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
      $sql_authorization_passive = "INSERT INTO `mat_log_aut_passive` 
      (`id`, `id_mat_log`,
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
      `vehicles_prado`, `vehicles_starex`, `vehicles_sprinter`, `vehicles_motorbike_honda`, `vehicles_scooter_bleu`, 
      /*BULDING INSIDE*/
      `bulding_inside_well_and_water`, `bulding_inside_solar`, `bulding_inside_generator`, `bulding_inside_operation`, 
      `bulding_inside_equipement`, 
      /*BULDING OUTSIDE*/
      `bulding_outside_technical`, `bulding_outside_canteen`, `bulding_outside_yard`, 
      `bulding_outside_villa_kb`, `bulding_outside_security`) 
      VALUES 
      (NULL, '$mat_log_id', 
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
      '$vehicles_prado', '$vehicles_starex', '$vehicles_sprinter', '$vehicles_motorbike_honda', '$vehicles_scooter_bleu', 
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
    $sql_authorization_temporary = "INSERT INTO `mat_log_aut_temporary` 
    (`id`, `id_mat_log`, 
   `new_bulding`, 
    `technical_storage`, `medical_storage`, `no_medical_storage`) 
    VALUES 
    (NULL, '$mat_log_id',
    '$new_bulding', 
    '$technical_storage', '$medical_storage', '$no_medical_storage')";

    //On prerare la requete
    $query_authorization_temporary= $db->prepare($sql_authorization_temporary);
    //On execute la requete

   $query_authorization_temporary->execute();
   
?>