<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){

        // ADMIN
        case 1 :
            include_once ("../../../../sidebar/html/analytics.php");
            break; 
        // CEO 
        case 2 :
            include_once ("../../../../sidebar/html/analytics.php");
            break;  
        // DEPUTY
        case 3 :
            include_once ("../../../../sidebar/html/analytics.php");
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // STORKEEPER IT
                case 8 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    include_once ("../../../../sidebar/html/analytics.php");
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    
                    break;
                // USERS MEDICAL
                case 17 :
                    
                    break;
                // USERS TECHNICAL
                case 18 :
                    
                    break;
                // USERS OPERATIONS
                case 19 :
                    
                    break;
                // DRIVERS
                case 20 :
                        
                        break;
    } 
}
?>