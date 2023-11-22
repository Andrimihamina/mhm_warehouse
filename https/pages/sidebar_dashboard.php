<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){
        // ADMIN
        case 1 :
            $page="../../../../../html/body/dashboard/Admin/Admin";
            break; 
        // CEO 
        case 2 :
            $page="../../../../../html/body/dashboard/ceo/ceo";
            break;  
        // DEPUTY
        case 3 :
            $page="../../../../../html/body/dashboard/Deputy/Deputy";
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    $page="../../../../../html/body/dashboard/warehouse/warehouse";
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    $page="../../../../../html/body/dashboard/warehouse/storekeeper_medical";
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    $page="../../../../../html/body/dashboard/warehouse/storekeeper_technical";
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    $page="../../../../../html/body/dashboard/warehouse/storekeeper_operation";
                    break;
                // STORKEEPER IT
                case 8 :
                    $page="../../../../../html/body/dashboard/warehouse/storekeeper_it";
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    $page="../../../../../html/body/dashboard/warehouse/storekeeper_communication";
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    $page="../../../../../html/body/dashboard/Responsibles/nurse";
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    $page="../../../../../html/body/dashboard/Responsibles/Obstetric_inpatients";
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    $page="../../../../../html/body/dashboard/Responsibles/Obstetric_outpatients";
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    $page="../../../../../html/body/dashboard/Responsibles/Pediatric";
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    $page="../../../../../html/body/dashboard/Responsibles/Office";
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    $page="../../../../../html/body/dashboard/Users/medical";
                    break;
                // USERS MEDICAL
                case 17 :
                    $page="../../../../../html/body/dashboard/Users/office";
                    break;
                // USERS TECHNICAL
                case 18 :
                    $page="../../../../../html/body/dashboard/Users/operation";
                    break;
                // USERS OPERATIONS
                case 19 :
                    $page="../../../../../html/body/dashboard/Users/technical";
                    break;
                // DRIVERS
                case 20 :
                    $page="../../../../../html/body/dashboard/Users/technical";
                    break;
    } 
}
?>