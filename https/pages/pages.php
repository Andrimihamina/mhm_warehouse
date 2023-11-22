<?php
    //REDIRECTION DE LA PAGE
    switch($page){
        // ADMIN
        case 1 :
            header("Location: ../Layout/dashboard/Admin.php");
            break; 
        // CEO 
        case 2 :
            header("Location: ../Layout/dashboard/Admin.php");
            break;  
        // DEPUTY
        case 3 :
            header("Location: ../Layout/dashboard/deputy.php");
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    header("Location: ../Layout/dashboard/Admin.php");
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    header("Location: ../Layout/dashboard/w_medical.php");
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    header("Location: ../Layout/dashboard/w_technical.php");
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    header("Location: ../Layout/dashboard/w_logistic.php");
                    break;
                // STORKEEPER IT
                case 8 :
                    header("Location: ../Layout/dashboard/w_itc.php");
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    header("Location: ../Layout/dashboard/w_itc.php");
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    header("Location: ../Layout/dashboard/R_medical.php");
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    header("Location: ../Layout/dashboard/R_medical.php");
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    header("Location: ../Layout/dashboard/R_medical.php");
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    header("Location: ../Layout/dashboard/R_medical.php");
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    header("Location: ../Layout/dashboard/R_office.php");
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    header("Location: ../Layout/dashboard/U_medical.php");
                    break;
                // USERS OFFICE
                case 17 :
                    header("Location: ../Layout/dashboard/U_office.php");
                    break;
                // USERS TECHNICAL
                case 18 :
                    header("Location: ../Layout/dashboard/U_technical.php");
                    break;
                // USERS ITC
                case 19 :
                    header("Location: ../Layout/dashboard/U_foods.php");
                    break;
                // DRIVERS
                case 20 :
                    header("Location: ../Layout/dashboard/U_technical.php");
                    break;
    } 
   
   ?>