<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){  
        // ADMIN
        case 1 :
            $side_bare  = "1_admin.php";
            break; 
        // CEO 
        case 2 :
            $side_bare  = "2_ceo.php";
            break;  
        // DEPUTY
        case 3 :
            $side_bare  = "3_deputy.php";
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    $side_bare  = "4_w_admin.php";
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    $side_bare  = "5_w_medical.php";
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    $side_bare  = "6_w_technical.php";
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    $side_bare  = "7_w_operations.php";
                    break;
                // STORKEEPER IT
                case 8 :
                    $side_bare  = "8_w_itc.php";
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    $side_bare  = "9_w_communication.php";
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    $side_bare  = "10_responsibles.php";
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    $side_bare  = "10_responsibles.php";
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    $side_bare  = "10_responsibles.php";
                    break;
                // RESPONSIBLES PEDIATRIC INPATIENTS
                case 14 :
                    $side_bare  = "10_responsibles.php";
                // RESPONSIBLES PEDIATRIC OUTPATIENTS
                case 14 :
                    $side_bare  = "10_responsibles.php";
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    $side_bare  = "10_responsibles.php";
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    $side_bare  = "11_users.php";
                    break;
                // USERS OFFICE
                case 17 :
                    $side_bare  = "11_users.php";
                    break;
                // USERS TECHNICAL
                case 18 :
                    $side_bare  = "11_users.php";
                    break;
                // USERS OPERATIONS
                case 19 :
                    $side_bare  = "11_users.php";
                    break;  
             
    } 
}
?>