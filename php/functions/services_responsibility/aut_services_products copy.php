<?php
require_once "../../env/dns_warehouse.php";
 
// CHECK PARKING
$services = $_SESSION["services"]["services"];
$list_service= "SELECT * FROM `services` WHERE `id_service` = '$services'";
$requete_service= $db->query($list_service);
$requete_service= $requete_service->fetchAll();

$services_parking = $requete_service[0]["active_passive_temporary"];
 switch($services_parking){ 
    case 1 :
        // ACTIVE
        $service_parking = "medicine_aut_active";
        break; 
    case 2 :
        // PASSIVE
        $service_parking = "medicine_aut_passive";
        break;
    case 3 :
        // TEMPORARY
        $service_parking = "medicine_aut_temporary";
        break;
    }

// LIST OF SERVICES
switch($services){
    case 1 :
        // EMERGENCY
        $service_name = "outpatients_Emergency";
        break; 
    case 2 :
        // JOY CENTER
        $service_name = "outpatients_Joy_Center";
        break;
    case 3 :
        // ULM
        $service_name = "ulm";
        break;
    case 4 :
        // MIDMOB
        $service_name = "midmob";
        break; 
    case 5 :
        // DETMOB
        $service_name = "detmob";
        break;
    case 6 :
        // AMBULANCE 1
        $service_name = "ambulance_1";
        break;
    case 7 :
        // AMBULANCE 2
        $service_name = "ambulance_2";
        break;
    case 8 :
        // OUTREACHES WITH PARTENERS
        $service_name = "outreaches_with_parteners";
        break; 
    case 9 :
        // GRACE CENTER
        $service_name = "outpatients_Grace_Center";
        break;
    case 10 :
        // OCCUPATIONAL THERAPY
        $service_name = "outpatients_occupational_therapy";
        break;
    case 11 :
        // GENERAL DOC
        $service_name = "outpatients_general_Doctors";
        break; 
    case 12 :
        // PEDIATRIC OUTPATIENTS
        $service_name = "outpatients_pediatric";
        break;
    case 13 :
        // DENTAL 
        $service_name = "outpatients_dental";
        break;
    case 14 :
        // DERMATHOLOGY OUTPATIENTS
        $service_name = "outpatients_dermathology";
        break;
    case 15 :
        // ULTRASOUND
        $service_name = "outpatients_Ultrasound";
        break; 
    case 16 :
        // OBSTETRICAL OUTPATIENTS
        $service_name = "outpatients_obstetrical";
        break;
    case 17 :
        // PLANING FAMILIAL
        $service_name = "outpatients_Planning_Familial";
        break;
    case 18 :
        // YUCK ROOM
        $service_name = "outpatients_Yuck_Room";
        break; 
    case 19 :
        // STERILIZATIONS
        $service_name = "sterilizations";
        break;
    case 20 :
        // LABORATORY
        $service_name = "laboratory";
        break;
    case 21 :
        // DELIVERY
        $service_name = "inpatients_delivery";
        break;
    case 22 :
        // STORK CENTER BABY ROOM
        $service_name = "inpatients_Baby_Room";
        break; 
    case 23 :
        // STORK CENTER
        $service_name = "inpatients_Stork_Center";
        break;
    case 24 :
        // NEONATAL INTESIVE CARE
        $service_name = "inpatients_Neonatal_Intensive";
        break;
    case 25 :
        // NEONATAL KANGOORO
        $service_name = "inpatients_Neonatal_Kangaroo";
        break; 
    case 26 :
        // PEDIATRIC ONE
        $service_name = "inpatients_pediatric_one";
        break;
    case 27 :
        // SURGERIES
        $service_name = "inpatients_surgeries";
        break;
    case 28 :
        // O THERAPY
        $service_name = "o_therapy";
        break;
    case 29 :
        // GERMAN DOCS
        $service_name = "german_docs";
        break; 
    case 30 :
        // EYE
        $service_name = "eye";
        break;
    case 31 :
        // DERMATHOLOGY
        $service_name = "external_dermathology";
        break;
    case 32 :
        // COOPERATONS
        $service_name = "external_others";
        break; 
    case 33 :
        // MEDICAL SUPPORT
        $service_name = "sponsorships_medical_support";
        break;
    case 34 :
        // MILK PROGRAM
        $service_name = "sponsorships_milk_program";
        break;
    case 35 :
        // FAMILIES
        $service_name = "sponsorships_familles";
        break;
    case 36 :
        // MHM STAFF
        $service_name = "sponsorships_mhm_staff_kids";
        break; 
    case 37 :
        // HELTHY FOODS
        $service_name = "sponsorships_healthy_foods";
        break;
    case 38 :
        //MHM FAMILIES
        $service_name = "sponsorships_mhm_staff_familles";
        break;
    case 39 :
        // MEDICAL AIDS PREGNANCIES
        $service_name = "sponsorships_preganancies";
        break; 
    case 40 :
        // MEDICAL AIDS KIDS
        $service_name = "sponsorships_kids";
        break;
    case 41 :
        // MEDICAL AIDS SCHOOL
        $service_name = "sponsorships_school";
        break;
    case 42 :
        // CHAPLINCY
        $service_name = "social_chaplincy";
        break;
    case 43 :
        // KIDS CLUBS
        $service_name = "social_kids_club";
        break; 
    case 44 :
        // PLAY MOBIL
        $service_name = "social_playmobil";
        break;
    case 45 :
        // PRAYER WORKSHIPS ALPHA COURSE
        $service_name = "social_prayer";
        break;
    case 46 :
        // SENSIBILIZATION
        $service_name = "social_sensibilizations";
        break; 
    case 47 :
        // TRAINING INTERNAL
        $service_name = "training_internal_admin";
        break;
    case 48 :
        // TRAINING ETERNAL
        $service_name = "training_external_admin";
        break;
    case 49 :
        // ADMIN
        $service_name = "admin_admin";
        break;
    case 50 :
        // LOGISTIC
        $service_name = "admin_logistic";
        break; 
    case 51 :
        // FINANCE
        $service_name = "admin_finance";
        break;
    case 52 :
        // IT
        $service_name = "admin_it";
        break;
    case 53 :
        // QM
        $service_name = "admin_qm";
        break; 
    case 54 :
        // COMMUNICATION
        $service_name = "admin_communication";
        break;
    case 55 :
        // HR 
        $service_name = "HR";
        break;
    case 56 :
        // WAREHOUSE
        $service_name = "Warehouse";
        break;
    case 57 :
        // OPERATION CLEANING
        $service_name = "Operation_Cleaning";
        break; 
    case 58 :
        // OPERATION COOKING
        $service_name = "Operation_Cooking";
        break;
    case 59 :
        // OPERATION LAUNDRY
        $service_name = "Operation_Laundry";
        break;
    case 60 :
        // TECHNICAL
        $service_name = "technical_technical";
        break; 
    case 61 :
        // BIOMED
        $service_name = "technical_Biomed";
        break;
    case 62 :
        // MECHANICAL
        $service_name = "technical_Mechanical";
        break;
    case 63 :
        // VEHICLE ISUZU BLEU
        $service_name = "vehicles_isuzu_bleu";
        break;
    case 64 :
        // VEHICLE ISUZU GREEN
        $service_name = "vehicles_isuzu_green";
        break; 
    case 65 :
        // VEHICLE GALOPPER
        $service_name = "vehicles_galopper";
        break;
    case 66 :
        // VEHICLE DAIHATSU
        $service_name = "vehicles_daihatsu";
        break;
    case 67 :
        // VEHICLE PRADO
        $service_name = "vehicles_prado";
        break;
    case 68 :
        // VEHICLE STAREK
        $service_name = "vehicles_starex";
        break; 
    case 69 :
        // VEHICLE SPRINTER
        $service_name = "vehicles_sprinter";
        break;
    case 70 :
        // VEHICLE MOTOR BIKE
        $service_name = "vehicles_motorbike_honda";
        break;
    case 71 :
        // VEHICLE SCOOTER BLEU
        $service_name = "vehicles_scooter_bleu";
        break;
    case 72 :
        // VEHICLE OTHERS
        $service_name = "vehicles_others";
        break;
    case 73 :
        // WELL ADN WATER
        $service_name = "bulding_inside_well_and_water";
        break;
    case 74 :
        // SOLAR PANEL AND ELECTRICITY
        $service_name = "bulding_inside_solar";
        break; 
    case 75 :
        // GENERATOR AND ELECTRICITY
        $service_name = "bulding_inside_generator";
        break;
    case 76 :
        // OPERATION
        $service_name = "bulding_inside_operation";
        break;
    case 77 :
        // EQUIPEMENT MACHINERY AND DEVICE
        $service_name = "bulding_inside_equipement";
        break; 
    case 78 :
        // TECHNICAL SITE
        $service_name = "bulding_outside_technical";
        break;
    case 79 :
        // CANTEEN
        $service_name = "bulding_outside_canteen";
        break;
    case 80 :
        // YARD
        $service_name = "bulding_outside_yard";
        break;
    case 81 :
        // SECURITY AND SAFETY
        $service_name = "bulding_outside_security";
        break; 
    case 82 :
        // NEW BULDING
        $service_name = "new_bulding";
        break;
    case 83 :
        // TECHNICAL STORAGE
        $service_name = "technical_storage";
        break;
    case 84 :
        // MEDICAL STORAGE
        $service_name = "medical_storage";
        break; 
    case 85 :
        // NOT MEDICAL STORAGE
        $service_name = "no_medical_storage";
        break;
    }
?> 