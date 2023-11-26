<?php
    //REDIRECTION DE LA PAGE
    switch($page){
        // ADMIN
            case 1 : header("Location: ../Layout/dashboard/Admin.php");break; 
            // CEO 
            case 2 : header("Location: ../Layout/dashboard/Admin.php");break;  
            // DEPUTY
            case 3 : header("Location: ../Layout/dashboard/deputy.php");break; 

        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 : header("Location: ../Layout/dashboard/Admin.php");break;
                // STORKEEPER MEDICAL
                case 5 : header("Location: ../Layout/dashboard/w_medical.php");break;
                // STORKEEPER TECHNICAL
                case 6 : header("Location: ../Layout/dashboard/w_technical.php");break;
                // STORKEEPER OPERATIONS
                case 7 : header("Location: ../Layout/dashboard/w_logistic.php");break;
                // STORKEEPER IT
                case 8 : header("Location: ../Layout/dashboard/w_itc.php");break;
                // STORKEEPER COMMUNICATION
                case 9 : header("Location: ../Layout/dashboard/w_itc.php");break;

        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 10 : header("Location: ../Layout/dashboard/R_medical.php");break;
                // RESPONSIBLES ANESTHESIOLOGIST
                case 11 : header("Location: ../Layout/dashboard/R_medical.php"); break;

                // RESPONSIBLES COMMUNICATION
                case 12 : header("Location: ../Layout/dashboard/R_office.php"); break;
                // RESPONSIBLES FINANCE
                case 13 : header("Location: ../Layout/dashboard/R_office.php"); break;
                // RESPONSIBLES HR
                case 14 : header("Location: ../Layout/dashboard/R_office.php"); break;
                // RESPONSIBLES IT
                case 15 : header("Location: ../Layout/dashboard/R_office.php"); break;
                // RESPONSIBLES LOGISTIC
                case 16 : header("Location: ../Layout/dashboard/R_office.php"); break;
                // RESPONSIBLES MINISTRY
                case 17 : header("Location: ../Layout/dashboard/R_office.php"); break;


                // RESPONSIBLES OBST IN
                case 18 : header("Location: ../Layout/dashboard/R_medical.php");
                // RESPONSIBLES OBST OUT
                case 19 : header("Location: ../Layout/dashboard/R_medical.php");


                // RESPONSIBLES OFFICE
                case 20 : header("Location: ../Layout/dashboard/R_office.php"); break;
                // RESPONSIBLES OPERATIONS
                case 21 : header("Location: ../Layout/dashboard/R_office.php"); break;

                // RESPONSIBLES PEDIATRIC
                case 22 : header("Location: ../Layout/dashboard/R_medical.php"); break;

                 // RESPONSIBLES TRAINING
                 case 23 : header("Location: ../Layout/dashboard/R_office.php"); break;


        // USERS
                // USERS OFFICE FINANCE
                case 24 : header("Location: ../Layout/dashboard/U_office.php");break;
                // USERS OFFICE HR
                case 25 : header("Location: ../Layout/dashboard/U_office.php");break;
                // USERS OFFICE LOGISTIC
                case 26 : header("Location: ../Layout/dashboard/U_office.php");break;

                // USERS MEDICAL ANESTH
                case 27 : header("Location: ../Layout/dashboard/U_medical.php");break;
                // USERS MEDICAL 
                case 28 : header("Location: ../Layout/dashboard/U_medical.php");break;

                // USERS OFFICE MINISTRY
                case 29 : header("Location: ../Layout/dashboard/U_office.php");break;
                // USERS OFFICE LOGISTIC
                case 30 : header("Location: ../Layout/dashboard/U_office.php");break;

                // USERS BIOMEDICAL
                case 31 : header("Location: ../Layout/dashboard/U_technical.php");break;
                // USERS MECHANICAL
                case 32 : header("Location: ../Layout/dashboard/U_technical.php");break;
                // USERS TECHNICAL
                case 33 : header("Location: ../Layout/dashboard/U_technical.php");break;
                
    } 
   
   ?>