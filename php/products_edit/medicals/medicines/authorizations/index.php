<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
======================== ACTIVE =============================
*/
/*
======================== MOBILE MEDICAL =============================
*/
//ULM
        $ulm = isSet($_POST["ulm-$id"]) ? 1 : 0;
//MIDMOB
        $midmob = isSet($_POST["midmob-$id"]) ? 1 : 0;
//DETMOB
        $detmob = isSet($_POST["detmob-$id"]) ? 1 : 0;
//AMBULANCE 1
        $ambulance_1 = isSet($_POST["ambulance_1-$id"]) ? 1 : 0;
//AMBULANCE 2
        $ambulance_2 = isSet($_POST["ambulance_2-$id"]) ? 1 : 0;
//OUTREACHES WITH PARTENERS
        $outreaches_with_parteners = isSet($_POST["outreaches_with_parteners-$id"]) ? 1 : 0;

/*
========================  MEDICAL =============================
*/
/*
========================  OUTPATIENTS =============================
*/
//JOY CENTER
        $outpatients_Joy_Center = isSet($_POST["outpatients_Joy_Center-$id"]) ? 1 : 0;
//EMERGENCY
        $outpatients_Emergency = isSet($_POST["outpatients_Emergency-$id"]) ? 1 : 0;
//GRACE CENTER
        $outpatients_Grace_Center = isSet($_POST["outpatients_Grace_Center-$id"]) ? 1 : 0;
//OCCUPATIONAL THERAPY
        $outpatients_occupational_therapy = isSet($_POST["outpatients_occupational_therapy-$id"]) ? 1 : 0;
//GENERAL DOCTORS
        $outpatients_general_Doctors = isSet($_POST["outpatients_general_Doctors-$id"]) ? 1 : 0;
//PEDIATRIC
        $outpatients_pediatric = isSet($_POST["outpatients_pediatric-$id"]) ? 1 : 0;
//DENTAL
        $outpatients_dental = isSet($_POST["outpatients_dental-$id"]) ? 1 : 0;
//DERMATHOLOGY
        $outpatients_dermathology = isSet($_POST["outpatients_dermathology-$id"]) ? 1 : 0;
//ULTRASOUND
        $outpatients_Ultrasound = isSet($_POST["outpatients_Ultrasound-$id"]) ? 1 : 0;
//OBSTETRICAL
        $outpatients_obstetrical = isSet($_POST["outpatients_obstetrical-$id"]) ? 1 : 0;
//PLANNING FAMILIAL
        $outpatients_Planning_Familial = isSet($_POST["outpatients_Planning_Familial-$id"]) ? 1 : 0;
//YUCK ROOM
        $outpatients_Yuck_Room = isSet($_POST["outpatients_Yuck_Room-$id"]) ? 1 : 0;
/*
========================  STERILIZATION AND LABORATORY =============================
*/
//STERILIZATIONS
        $sterilizations = isSet($_POST["sterilizations-$id"]) ? 1 : 0;
//LABORATORY
        $laboratory = isSet($_POST["laboratory-$id"]) ? 1 : 0;
/*
========================  INPATIENTS OBSTETRICAL =============================
*/
//DELIVERY
        $inpatients_delivery = isSet($_POST["inpatients_delivery-$id"]) ? 1 : 0;

/*
========================  INPATIENTS =============================
*/
//BABY ROOM
        $inpatients_Baby_Room = isSet($_POST["inpatients_Baby_Room-$id"]) ? 1 : 0;
//STORK CENTER
        $inpatients_Stork_Center = isSet($_POST["inpatients_Stork_Center-$id"]) ? 1 : 0;
//NEONATAL INTENSIVE CARE
        $inpatients_Neonatal_Intensive = isSet($_POST["inpatients_Neonatal_Intensive-$id"]) ? 1 : 0;
//NEONATAL KANGOROO CARE
        $inpatients_Neonatal_Kangaroo = isSet($_POST["inpatients_Neonatal_Kangaroo-$id"]) ? 1 : 0;
//PEDIATRIC ONE
        $inpatients_pediatric_one = isSet($_POST["inpatients_pediatric_one-$id"]) ? 1 : 0;
/*
========================  INPATIENTS SURGERIES =============================
*/
//GENERAL
        $inpatients_surgeries = isSet($_POST["inpatients_surgeries-$id"]) ? 1 : 0;
/*
========================  EXTERNAL MEDICAL SERVICE =============================
*/
//O THERAPY
        $o_therapy = isSet($_POST["o_therapy-$id"]) ? 1 : 0;
//GERMAN DOCS
        $german_docs = isSet($_POST["german_docs-$id"]) ? 1 : 0;
//EYE
        $eye = isSet($_POST["eye-$id"]) ? 1 : 0;
//EXTERNAL DERMATHOLOGY
        $external_dermathology = isSet($_POST["external_dermathology-$id"]) ? 1 : 0;
//OTHERS
        $external_others = isSet($_POST["external_others-$id"]) ? 1 : 0;

/*
========================  SPONSORSHIPS =============================
*/
//MEDICAL SUPPORT
        $sponsorships_medical_support = isSet($_POST["sponsorships_medical_support-$id"]) ? 1 : 0;
//MILK PROGRAM
        $sponsorships_milk_program = isSet($_POST["sponsorships_milk_program-$id"]) ? 1 : 0;
//FAMILLES
        $sponsorships_familles = isSet($_POST["sponsorships_familles-$id"]) ? 1 : 0;
//MHM STAFF KIDS
        $sponsorships_mhm_staff_kids = isSet($_POST["sponsorships_mhm_staff_kids-$id"]) ? 1 : 0;
//HEALTHY FOODS
        $sponsorships_healthy_foods = isSet($_POST["sponsorships_healthy_foods-$id"]) ? 1 : 0;
//MHM STAFF FAMILLES
        $sponsorships_mhm_staff_familles = isSet($_POST["sponsorships_mhm_staff_familles-$id"]) ? 1 : 0;
//PREGNANCIES
        $sponsorships_preganancies = isSet($_POST["sponsorships_preganancies-$id"]) ? 1 : 0;
//KIDS
        $sponsorships_kids = isSet($_POST["sponsorships_kids-$id"]) ? 1 : 0;
//SCHOOL
        $sponsorships_school = isSet($_POST["sponsorships_school-$id"]) ? 1 : 0;
/*
========================  SOCIAL AFFAIRE MINISTRY =============================
*/
//CHAPLINCY
        $social_chaplincy = isSet($_POST["social_chaplincy-$id"]) ? 1 : 0;
//KIDS CLUBS
        $social_kids_club = isSet($_POST["social_kids_club-$id"]) ? 1 : 0;
//PLAYMOBIL
        $social_playmobil = isSet($_POST["social_playmobil-$id"]) ? 1 : 0;
//PRAYER WORKSHIP ALPHA COURS
        $social_prayer = isSet($_POST["social_prayer-$id"]) ? 1 : 0;
//SENSIBILIZATIONS
        $social_sensibilizations = isSet($_POST["social_sensibilizations-$id"]) ? 1 : 0;
/*
========================  TRAINING AND TEACHING =============================
*/
/*
========================  INTERNAL =============================
*/
//ADMIN
        $training_internal_admin = isSet($_POST["training_internal_admin-$id"]) ? 1 : 0;
//MEDICAL
        $training_internal_medical = isSet($_POST["training_internal_medical-$id"]) ? 1 : 0;
//SOCIAL
        $training_internal_social = isSet($_POST["training_internal_social-$id"]) ? 1 : 0;
//TECHNICAL
        $training_internal_technical = isSet($_POST["training_internal_technical-$id"]) ? 1 : 0;
/*
========================  EXTERNAL =============================
*/
//ADMIN
        $training_external_admin = isSet($_POST["training_external_admin-$id"]) ? 1 : 0;
//MEDICAL
        $training_external_medical = isSet($_POST["training_external_medical-$id"]) ? 1 : 0;
//SOCIAL
        $training_external_social = isSet($_POST["training_external_social-$id"]) ? 1 : 0;
//TECHNICAL
        $training_external_technical = isSet($_POST["training_external_technical-$id"]) ? 1 : 0;
/*
========================  PASSIVE =============================
*/
/*
========================  ADMIN =============================
*/
//ADMIN
        $admin_admin = isSet($_POST["admin_admin-$id"]) ? 1 : 0;
//LOGISTIC
        $admin_logistic = isSet($_POST["admin_logistic-$id"]) ? 1 : 0;
//FINANCE
        $admin_finance = isSet($_POST["admin_finance-$id"]) ? 1 : 0;
//IT
        $admin_it = isSet($_POST["admin_it-$id"]) ? 1 : 0;
//QM
        $admin_qm = isSet($_POST["admin_qm-$id"]) ? 1 : 0;
//COMMUNICATION
        $admin_communication = isSet($_POST["admin_communication-$id"]) ? 1 : 0;

/*
        ========================  STAFF =============================
*/
//HR
        $HR = isSet($_POST["HR-$id"]) ? 1 : 0;
/*
========================  WAEREHOUSE =============================
*/
        $Warehouse = isSet($_POST["Warehouse-$id"]) ? 1 : 0;
/*
========================  OPERATIONS =============================
*/
        $Operation_Cleaning = isSet($_POST["Operation_Cleaning-$id"]) ? 1 : 0;
        $Operation_Cooking = isSet($_POST["Operation_Cooking-$id"]) ? 1 : 0;
        $Operation_Laundry = isSet($_POST["Operation_Laundry-$id"]) ? 1 : 0;
/*
========================  TECHNICAL =============================
*/
        $technical_technical = isSet($_POST["technical_technical-$id"]) ? 1 : 0;
        $technical_Biomed = isSet($_POST["technical_Biomed-$id"]) ? 1 : 0;
        $technical_Mechanical = isSet($_POST["technical_Mechanical-$id"]) ? 1 : 0;
/*
========================  VEHICLES =============================
*/
//ISUZU BLUE
        $vehicles_isuzu_bleu = isSet($_POST["vehicles_isuzu_bleu-$id"]) ? 1 : 0;
//ISUZU GREEN
        $vehicles_isuzu_green = isSet($_POST["vehicles_isuzu_green-$id"]) ? 1 : 0;
//GALOPPER
        $vehicles_galopper = isSet($_POST["vehicles_galopper-$id"]) ? 1 : 0;
//DAIHATSU
        $vehicles_daihatsu = isSet($_POST["vehicles_daihatsu-$id"]) ? 1 : 0;
//PRADO
        $vehicles_prado = isSet($_POST["vehicles_prado-$id"]) ? 1 : 0;
//STAREX
        $vehicles_starex = isSet($_POST["vehicles_starex-$id"]) ? 1 : 0;
//MOTORBIKE HONDA
        $vehicles_motorbike_honda = isSet($_POST["vehicles_motorbike_honda-$id"]) ? 1 : 0;
//SCOOTER BLEU
        $vehicles_scooter_bleu = isSet($_POST["vehicles_scooter_bleu-$id"]) ? 1 : 0;
//SCOOTER BLEU
        $vehicles_others = isSet($_POST["vehicles_others-$id"]) ? 1 : 0;

/*
========================  BULDING INSIDE =============================
*/
//WELL AND WATER
        $bulding_inside_well_and_water = isSet($_POST["bulding_inside_well_and_water-$id"]) ? 1 : 0;
//SOLAR PANEL AND ELECTRICITY
        $bulding_inside_solar = isSet($_POST["bulding_inside_solar-$id"]) ? 1 : 0;
//GENERATOR AND ELECTRICITY
        $bulding_inside_generator = isSet($_POST["bulding_inside_generator-$id"]) ? 1 : 0;
//OPERATION
        $bulding_inside_operation = isSet($_POST["bulding_inside_operation-$id"]) ? 1 : 0;
//EUIPMENT
        $bulding_inside_equipement = isSet($_POST["bulding_inside_equipement-$id"]) ? 1 : 0;
/*
========================  BULDING OUTSIDE =============================
*/
//TECHNICAL SITE
        $bulding_outside_technical = isSet($_POST["bulding_outside_technical-$id"]) ? 1 : 0;
//CANTEEN
        $bulding_outside_canteen = isSet($_POST["bulding_outside_canteen-$id"]) ? 1 : 0;
//YARD
        $bulding_outside_yard = isSet($_POST["bulding_outside_yard-$id"]) ? 1 : 0;
//VILLA KB
        $bulding_outside_villa_kb = isSet($_POST["bulding_outside_villa_kb-$id"]) ? 1 : 0;
//SECURITY
        $bulding_outside_security = isSet($_POST["bulding_outside_security-$id"]) ? 1 : 0;
/*
========================  TEMPORARY =============================
*/
//NEW BULDING
        $new_bulding = isSet($_POST["new_bulding-$id"]) ? 1 : 0;
//TECHNICAL STORAGE
        $technical_storage = isSet($_POST["technical_storage-$id"]) ? 1 : 0;
//MEDICAL STORAGE
        $medical_storage = isSet($_POST["medical_storage-$id"]) ? 1 : 0;
//NO MEDICAL STORAGE
        $no_medical_storage = isSet($_POST["no_medical_storage-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/medicals/medicines/authorizations/1_mobile_medical.php");
    }
}
