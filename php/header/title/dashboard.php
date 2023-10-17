<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){ 
        // ADMIN
        case 1 :
            $page  ="../../Admin/Admin";
            break; 
        // CEO 
        case 2 :
            $page  ="../../ceo/ceo";
            break;  
        // DEPUTY
        case 3 :
            $page  ="../../Deputy/Deputy";
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    $page  ="../../warehouse/warehouse";
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    $page  ="../../warehouse/storekeeper_medical";
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    $page  ="../../warehouse/storekeeper_technical";
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    $page  ="../../warehouse/storekeeper_operation";
                    break;
                // STORKEEPER IT
                case 8 :
                    $page  ="../../warehouse/storekeeper_it";
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    $page  ="../../warehouse/storekeeper_communication";
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    $page  ="../../Responsibles/nurse";
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    $page  ="../../Responsibles/Obstetric_inpatients";
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    $page  ="../../Responsibles/Obstetric_outpatients";
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    $page  ="../../Responsibles/Pediatric";
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    $page  ="../../Responsibles/Office";
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    $page  ="../../Users/medical";
                    break;
                // USERS MEDICAL
                case 17 :
                    $page  ="../../Users/office";
                    break;
                // USERS TECHNICAL
                case 18 :
                    $page  ="../../Users/operation";
                    break;
                // USERS OPERATIONS
                case 19 :
                    $page  ="../../Users/technical";
                    break;  
             
    } 
}
?>