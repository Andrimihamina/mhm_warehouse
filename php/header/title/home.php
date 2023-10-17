<?php
$pages = $_SESSION["user"]["pages"];

    if($pages !=""){
        switch($pages){
        // ADMIN
        case 1 :
            $home="../../../dashboard/Admin/Admin";
            break; 
        // CEO 
        case 2 :
            $home="../../../dashboard/ceo/ceo";
            break;  
        // DEPUTY
        case 3 :
            $home="../../../dashboard/Deputy/Deputy";
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    $home="../../../dashboard/warehouse/warehouse";
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    $home="../../../dashboard/warehouse/storekeeper_medical";
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    $home="../../../dashboard/warehouse/storekeeper_technical";
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    $home="../../../dashboard/warehouse/storekeeper_operation";
                    break;
                // STORKEEPER IT
                case 8 :
                    $home="../../../dashboard/warehouse/storekeeper_it";
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    $home="../../../dashboard/warehouse/storekeeper_communication";
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    $home="../../../dashboard/Responsibles/nurse";
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    $home="../../../dashboard/Responsibles/Obstetric_inpatients";
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    $home="../../../dashboard/Responsibles/Obstetric_outpatients";
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    $home="../../../dashboard/Responsibles/Pediatric";
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    $home="../../../dashboard/Responsibles/Office";
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    $home="../../../dashboard/Users/medical";
                    break;
                // USERS MEDICAL
                case 17 :
                    $home="../../../dashboard/Users/office";
                    break;
                // USERS TECHNICAL
                case 18 :
                    $home="../../../dashboard/Users/operation";
                    break;
                // USERS OPERATIONS
                case 19 :
                    $home="../../../dashboard/Users/technical";
                    break;    
    } 
}
?>