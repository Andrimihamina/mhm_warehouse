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
            $home="../../../dashboard/Admin/Admin";
            break;  
        // DEPUTY
        case 3 :
            $home="../../../dashboard/Deputy/Deputy";
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    $home="../../../dashboard/Admin/Admin";
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    $home="../../../dashboard/w_medical.php";
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    $home="../../../dashboard/w_technical.php";
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    $home="../../../dashboard/w_logistic.php";
                    break;
                // STORKEEPER IT
                case 8 :
                    $home="../../../dashboard/w_itc.php";
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    $home="../../../dashboard/w_itc.php";
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    $home="../../../dashboard/R_medical.php";
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    $home="../../../dashboard/R_medical.php";
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    $home="../../../dashboard/R_medical.php";
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    $home="../../../dashboard/R_medical.php";
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    $home="../../../dashboard/R_office.php";
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    $home="../../../dashboard/U_medical.php";
                    break;
                // USERS OFFICE
                case 17 :
                    $home="../../../dashboard/U_office.php";
                    break;
                // USERS TECHNICAL
                case 18 :
                    $home="../../../dashboard/U_technical.php";
                    break;
                // USERS OPERATIONS
                case 19 :
                    $home="../../../dashboard/U_foods.php";
                    break;    
    } 
}
?>