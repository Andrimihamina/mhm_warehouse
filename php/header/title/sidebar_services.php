<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){
        // ADMIN
        case 1 :
            include_once ("../../../../sidebar/html/services.php");
            break; 
        // CEO 
        case 2 :

            break;  
        // DEPUTY
        case 3 :

            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                  
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                  
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                  
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                  
                    break;
                // STORKEEPER IT
                case 8 :
                  
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                  
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    
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
    } 
}
?>